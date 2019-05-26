<?php

namespace App\Http\Controllers;
use App\HomeType;
use App\Province;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite, Redirect, Session, URL;

class LoginController extends Controller {
	//
	protected $province;
	protected $Menu;
	public function __construct() {
		$this->Menu = HomeType::all();
		$this->province = Province::orderBy('name', 'ASC')->get();
	}
	public function login(Request $request) {

		if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'status' => 1])) {
			return response()->json([
				'error' => false,
				'message' => 'success',
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => 'Tài khoản không chính xác!',
			], 200);
		}
	}
	public function logout() {
		Auth::logout();
		return redirect()->back();
	}
	public function register() {
		if (Auth::check()) {
			return redirect("");
		} else {
			return view('subpage.register', ['hometype' => $this->Menu, 'province' => $this->province]);
		}

	}

	public function postuser(Request $request) {
		$user = trim(strtolower($request->username));
		$pass = $request->password;
		$phone = $request->phone;
		$count = User::all()->where('username', $user)->count();
		if ($count == 1) {
			return response()->json([
				'error' => true,
				'message' => 'Tên đăng nhập đã tồn tại!',
			], 200);
		} else {
			$data = new User();
			$data->username = $user;
			$data->password = Hash::make($pass);
			$data->status = 1;
			$data->phone = $phone;
			$data->save();
			Auth::attempt(['username' => $user, 'password' => $pass]);
			return response()->json([
				'error' => false,
				'message' => 'ok',
			], 200);

		}
	}

	public function redirectToProvider($provider)
    {
        if(!Session::has('pre_url')){
            Session::put('pre_url', URL::previous());
        }else{
            if(URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }
        return Socialite::driver($provider)->redirect();
	}  
	
	public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, false);
        return Redirect::to(Session::get('pre_url'));
	}
	
	public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
		}
		$data = [
			'username'     => $user->name,
			'password'	=> md5('121233213213'),
            'email'    => $user->email,
            'provider' => $provider,
			'provider_id' => $user->id,
			'status' => 1
		];
	
		User::create($data);
		return $authUser = User::where('provider_id', $user->id)->first();
    }
}

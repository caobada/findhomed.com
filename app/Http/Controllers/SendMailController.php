<?php

namespace App\Http\Controllers;
use App\Mail\MailLooking;
use Mail;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\SubMail;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
class SendMailController extends Controller
{
    //
    public function SendMail(){
        $booking = new \stdClass();
        $booking->name = "Cao Xuan My";
        Mail::to('xuanmy.cntt96@gmail.com')->send(new MailLooking($booking));
    }
    public function index(){
        return view('AdminView.sendmail');
    }
    public function action(Request $request){
        
        $rules = [
            'title' => 'required|min:5|max:100',
            'contentmail' => 'required|min:10:max:500',
        ];
        $messages = [
            'title.required' => 'Tiêu đề không được để trống.',
            'contentmail.required' => 'Nội dung không được để trống.'
        ];
        if($request->has('id_home')){
            $rules['id_home'] = "required"; 
            $messages['id_home.required'] = "Id bài viết không được để trống";
        }
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return self::JsonExport('404',$validator->errors()->first());
        }else{
            $type= $request->option_send;
            $title = $request->title;
            $content = $request->contentmail;
   
            if($type == 0){
                $info_user = User::all();
               
                    $booking = new \stdClass();
                    $booking->title = $title;
                    $booking->content = $content;
                    $filelocal = '';
                    if ($request->hasFile('img')) {
                       $file = $request->img;
                       $location = 'public/images/home/';
                         $filename = $file->getClientOriginalName();
                         $file->move($location,$filename);
                         $filelocal = $location.$filename;
                         $booking->file = $filelocal;
                    } 
                   
                    if($request->has('id_home')){
                        $booking->id_home = $request->id_home;
                    }
               
                    foreach($info_user as $val){
                        if(!empty($val->email) && $val->email != null && $val->email != 'null'){
                            SendEmailJob::dispatch($booking,$val->email,$filelocal)->delay(Carbon::now()->addSeconds(2));
                        }
                    }
                return redirect()->back()->with('confirm', 'thanh cong');
            }
        }
    }


    public function subMail(Request $request){
            $rules = [
                'email' => 'required|email|min:10|max:255'
            ];
            $messages = [
                'email.required' => 'Trường email không được để trống',
                'email.email' => 'Sai định dạng email'
            ];
           
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return self::JsonExport(404,$validator->errors()->first());
            }else{
                try{
                    DB::beginTransaction();
                    $data = [
                        'mail' => $request->email
                    ];
                    $comp = subMail::where('mail',$request->email)->first();
                    if($comp){
                        return self::JsonExport(200,'Success');
                    }
                    $commit = SubMail::create($data);
                    if($commit){
                        DB::commit();
                        return self::JsonExport(200,'Success');
                    }else{
                        DB::rollBack();
                        return self::JsonExport(404,'Server Errors');
                    }
                }catch(\Exception $ex){
                    DB::rollBack();
                    return self::JsonExport(500,$ex->getMessage());
                }
            }
    }   

    static public function JsonExport($code, $msg, $data = null, $optinal = null) {
		$callback = [
			'code' => $code,
			'msg' => $msg,
		];
		if ($data != null) {
			$callback['data'] = $data;
		} else {
			$callback['data'] = (object) [];
		}

		if ($optinal != null && is_array($optinal)) {
			$callback[$optinal['name']] = $optinal['data'];
		}
		return $callback;
    }
    

}

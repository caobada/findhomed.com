<?php

namespace App\Http\Controllers;
use App\Home;
use App\HomeType;
use App\Province;
use App\TypePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {
	//
	public function index() {

		if (Auth::check()) {
			$typeprice = TypePrice::all();
			return view('subpage.post-home', ['typeprice'=>$typeprice]);
		} else {
			return redirect('/');
		}

	}
	public function posthome(Request $request) {
		try {
			$data = new Home();
			$data->title = $request->title;
			$data->type_id = $request->hometype;
			$data->phone_home = $request->phone;
			$data->doituong = $request->doituong;
			$price = $request->price;
			$data->user_id = Auth::user()->id;
			$data->price = $price;
			$data->type_price = $request->pricetype;
			$data->area = $request->area;
			$data->city = $request->province;
			$data->district = $request->district;
			$address = $request->address;
			$address = explode(',', $address);
			$data->street = $address[0] . ',' . $address[1];
			$data->desc = $request->desc;
			$data->view = 0;
			$lat = $request->maps['maps_maplat'];
			$lng = $request->maps['maps_maplng'];
			$data->location_map = $lat . ',' . $lng;
			if (isset($_FILES['img'])) {
				$file = $_FILES['img']['name'];
				$data->image = implode(';', $_FILES['img']['name']);
				for ($i = 0; $i < count($file); $i++) {

					move_uploaded_file($_FILES['img']['tmp_name'][$i], 'public/images/home/' . $file[$i]);
				}
			} else {
				$data->image = "findhomed.png";
			}
			$data->save();
			return redirect('/')->with('alert', 'thanh cong');
		} catch (\Exception $ex) {
			return $ex->getMessage();
		}
	}
}

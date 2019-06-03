<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\HomeType;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   

    static public function getMenu() {
    	return HomeType::all();
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





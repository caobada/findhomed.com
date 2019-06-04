<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class PushNotification extends Controller
{
    //
    
    public function push(){
        $body = "hello";
        $title = "hello";
        return self::PushNotify($body,$title,true);
    }
  
    public function PushNotify($body, $title, $click_action='', $all = false)
    {
            $data = new \stdClass();
            // $data->to = 'cWuC0LbyLJA:APA91bF7AgNp4tKtWHYmGriE1PrUo2JeW25Q0YQVcc538q0dddd8qW7Jd-x5WjpLj_QXuKEVz3CSZl0WDmMTN5nSjq9F4UstMTWAc3XE4_kFb7RbAJhcLdZBFZ0kjK6ZBTxnzy6fs-e7';
            // $data->priority = "high";
            $data->to = '/topics/all';
            $data->notification = new \stdClass();
            $data->notification->body = $body;
            $data->notification->title = $title;
            $data->notification->content_available = true;
            $data->notification->click_action = "http://localhost/findhomed.com/detail/14";
            $data->data = new \stdClass();
            $data->data->title = $title;
            $data->data->body = $body;
            $data->data->sound = "default";
            $data->collapse_key = "type_a";
            $headers = array(
                'Authorization: key=AAAAne2a7Fw:APA91bF6uITxTYFuLJo9XUKWfmzqiakYvzUj1k3FbE19J8QZfunLHZ-Zb81k1SA26lCmIes9ynwkcrXetaJTv7xVBKZ-wyJnVW7EPiUDj5GS7YKeCtPhFhd1YoqEdiyUSWYZ_jtmC7puH_sEIS3Y96VwEz9neUCoXw',
                'Content-Type: application/json'
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_exec($ch);
            curl_close($ch);
            return "Da push";
            
    
    }
    public function subScribe(Request $request)
    {
        $rules = array(
            'token' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return self::JsonExport(403, $validator->errors()->first());
        } else {
            try {
                $url = 'https://iid.googleapis.com/iid/v1:batchAdd';
                $headers = array(
                    'Authorization: key=AAAAne2a7Fw:APA91bF6uITxTYFuLJo9XUKWfmzqiakYvzUj1k3FbE19J8QZfunLHZ-Zb81k1SA26lCmIes9ynwkcrXetaJTv7xVBKZ-wyJnVW7EPiUDj5GS7YKeCtPhFhd1YoqEdiyUSWYZ_jtmC7puH_sEIS3Y96VwEz9neUCoXw',
                    'Content-Type: application/json'
                );
                $data = new \stdClass();
                $data->to = '/topics/all';
                $data->registration_tokens = array($request->token);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_exec($ch);
                curl_close($ch);
               return self::JsonExport(200, 'Success');
            } catch (\Exception $e) {
                return self::JsonExport(500, 'Có lỗi trong quá trình xử lý.');
            }
        }
    }
    

}

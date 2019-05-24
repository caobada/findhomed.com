<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushNotification extends Controller
{
    //
    
    public function push(){
   
        $body = "hello";
    $title = "hello";
        return self::PushNotify($body,$title,true);
    }
    public function PushNotify($body, $title, $all = false)
    {
       
            
           
     
            $data = new \stdClass();
            $data->to = '/topics/info';
             
            $data->priority = "high";
            $data->notification = new \stdClass();
            $data->notification->body = $body;
            $data->notification->title = $title;
            $data->notification->content_available = true;
            $data->notification->sound = "default";
            $data->data = new \stdClass();
            $data->data->info = $title;
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
            $a = curl_exec($ch);
            return $a;
            curl_close($ch);
            return "Da push";
            
    
    }
    public function subtopic(Request $request)
    {
        $rules = array(
            'token' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return self::JsonExport(403, $validator->errors()->first());
        } else {
            try {
                $url = 'https://iid.googleapis.com/iid/v1:batchAdd';
                $headers = array(
                    'Authorization: key=AAAAILid68g:APA91bFudb1vPGq9k0MwcTIkO0161LGn2DUfw97RO2AsrrMaQlOYfGKuw7lSQgfft_5i4vZ0IoDA1q9K9TXKBYBPp_m1yGHKOplstC0_cprAzeYbC60FAKt9s-SQtOPjWgKYM1gLNlXp',
                    'Content-Type: application/json'
                );
                $data = new \stdClass();
                $data->to = '/topics/admingroup';
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

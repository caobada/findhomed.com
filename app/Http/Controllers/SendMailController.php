<?php

namespace App\Http\Controllers;
use App\Mail\MailLooking;
use Mail;
use App\User;
use Illuminate\Http\Request;

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
        $type= $request->option_send;
        if($type == 0){
            $mail_arr = User::select('email')->get();
            foreach($mail_arr as $val){
                if(!empty($val->email) && $val->email != null && $val->email != 'null'){
                    $booking = new \stdClass();
                    $booking->title = $request->title;
                    $booking->content = $request->contentmail;
                    Mail::to($val->email)->send(new MailLooking($booking));
                }
            }
        }
    }
}

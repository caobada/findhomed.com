<?php

namespace App\Http\Controllers;
use App\Mail\MailLooking;
use Mail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    //
    public function SendMail(){
        $booking = new \stdClass();
        $booking->name = "Cao Xuan My";
        Mail::to('xuanmy.cntt96@gmail.com')->send(new MailLooking($booking));
    }
}

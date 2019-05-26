<?php

namespace App\Http\Controllers;
use App\Mail\MailLooking;
use Mail;
use App\User;
use Illuminate\Http\Request;
use Validator;

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
                $mail_arr = User::select('email')->get();
               
                    $booking = new \stdClass();
                    $booking->title = $title;
                    $booking->content = $content;
                    if (isset($_FILES['img'])) {
                        
                       
                        $booking->image = implode(';', $_FILES['img']['name']);
                        // for ($i = 0; $i < count($file); $i++) {
                             $file = 'public/images/home/'.$_FILES['img']['name'][0];
                             $booking->file = $file;
                            move_uploaded_file($_FILES['img']['tmp_name'][0], 'public/images/home/' . $file[0]);
                        // }
                    } 
                 
                    if($request->has('id_home')){
                        $booking->id_home = $request->id_home;
                    }
                    foreach($mail_arr as $val){
                        if(!empty($val->email) && $val->email != null && $val->email != 'null'){
                            Mail::to($val->email)->send(new MailLooking($booking),function($message){
                                $message->attachData($file);
                            });
                        }
                    }
                return redirect()->back()->with('confirm', 'thanh cong');
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
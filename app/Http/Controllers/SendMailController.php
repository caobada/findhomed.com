<?php

namespace App\Http\Controllers;
use App\Mail\MailLooking;
use Mail;
use App\User;
use App\HomeType;
use App\Home;
use Illuminate\Http\Request;
use Validator;
use App\SubMail;
use App\Report;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
class SendMailController extends Controller
{

    public function index(){
        $hometype = HomeType::where('status',1)->get();
        $home = Home::where('hienthi',1)->get();
        return view('AdminView.sendmail',["hometype"=>$hometype,"home"=>$home]);
    }

    public function showNumerMail(Request $request){
        $rules =[
            'type' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return self::JsonExport(404,$validator->errors()->first());
        }else{
            if($request->type == 'all'){
                $num_mail = User::where('status',1)->count();
            }else if($request->type == 'sub'){
                $num_mail = SubMail::count();
            }else{
                $hometype_id = explode(',',$request->val);
                $num_mail = Report::select('user_id')
                ->where('type_report',2)
                ->whereIn('hometype_id',$hometype_id)
                ->distinct('user_id')
                ->get();
                $num_mail = count($num_mail);
            }
            if($num_mail == null || $num_mail == '' || $num_mail < 0){
                $num_mail = '0';
            }
            return self::JsonExport(200,'success',$num_mail);
        }
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
            return redirect()->back()->with('error','Loi roi');
        }else{
           
            $type= $request->option_send;
            $title = $request->title;
            $content = $request->contentmail;
   
            if($type == 0){
                $info_user = User::select('email as mail')
                ->where('status',1)
                ->get();
            }elseif($type == 1){
                $info_user = [];
                $mail_arr = Report::with('user')->select('user_id')
                ->whereIn('hometype_id',$request->option_hometype)
                ->where('type_report',2)
                ->distinct()
                ->get();
                foreach($mail_arr as $val){
                    array_push($info_user,["mail"=>$val->user->email]);
                }
            }else{
                $info_user = subMail::select('mail')->get();
            }

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
            if($request->has('mylink') && $request->mylink !== null){
                $booking->mylink = $request->mylink;
            }
            if($request->has('id_home')){
                 $booking->id_home = $request->id_home;
            }

            foreach($info_user as $val){
                if($type != 1){
                    if(!empty($val->mail) && $val->mail != null && $val->mail != 'null'){
                
                        SendEmailJob::dispatch($booking,$val->mail,$filelocal)->delay(Carbon::now()->addSeconds(2));
                    }
                }else{
                    if(!empty($val['mail']) && $val['mail'] != null && $val['mail'] != 'null'){
                
                        SendEmailJob::dispatch($booking,$val['mail'],$filelocal)->delay(Carbon::now()->addSeconds(2));
                    }
                }
                
            }
            return redirect()->back()->with('success','thanh cong');
            
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

 
    

}

<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function report(Request $request){
        $rules = 
        [
            'user' => 'required|numeric',
            'id' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return self::JsonExport(404,$validator->errors()->first()); 
        }else{
            try{
                DB::beginTransaction();
                $data = [
                    'hometype_id' => $request->id,
                    'type_report' => 2,
                    'user_id' => $request->user,
                ];
                $compare = Report::where('hometype_id',$request->id)->where('user_id',$request->user)->first();
                if($compare){
                    return self::JsonExport(200,'success'); 
                }
                $commit = Report::create($data);
                if($commit){
                    DB::commit();
                    return self::JsonExport(200,'success');
                }else{
                    DB::rollBack();
                    return self::JsonExport(500,'Server Internal');
                }
            }catch(\Exception $e){
                DB::rollBack();
                return self::JsonExport(500,'Server Internal');
            }
        }
    }
}

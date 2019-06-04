<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Report;
use App\HomeType;
use App\Home;
use Carbon\Carbon;
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
    
    public function action_report(Request $request){
        $rules = [
            'optionreport' => 'required|in:1,2,3',
            'timereport' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return self::JsonExport(404,$validator->errors()->first());
        }else{
            try{
                $timeReport = $request->timereport;
                $data_hometype = ["id"=>[],"name"=>[]];
                if(strpos($timeReport, '-') !== false) {
                    $timeReport = explode('-',$timeReport);
                    $startDate = Carbon::parse($timeReport[0])->startOfDay()->format('Y-m-d H:i:s');
                    $endDate  = Carbon::parse($timeReport[1])->endOfDay()->format('Y-m-d H:i:s');
                } else {
                    return self::JsonExport(404,'Wrong format date');
                }
                $hometype = HomeType::where('status',1)->get();
                foreach($hometype as $val){
                    array_push($data_hometype['id'],$val->id);
                    array_push($data_hometype['name'],$val->nametype);
                }
           
                if($request->optionreport == 3){
                    // Thống kê lượt tìm kiếm
                    $report = Report::with('hometype')
                    ->select('hometype_id',DB::raw('count(*) as count_report'))
                    ->where('type_report',1)
                    ->whereBetween('created_at',[$startDate,$endDate])
                    ->groupBy('hometype_id')
                    ->get();
                }elseif($request->optionreport == 2){
                    //Thống kê lượt user xem thông tin
                    $report = Report::select('hometype_id',DB::raw('count(*) as count_report'))
                    ->where('type_report',2)
                    ->whereBetween('created_at',[$startDate,$endDate])
                    ->groupBy('hometype_id')
                    ->get();
                }else{
                    //Thống kê lượt xem bài viết theo chủ đề
                    $report = Home::select('type_id as hometype_id',DB::raw('sum(view) as count_report'))
                    ->groupBy('type_id')
                    ->get();
                }
                $data = ["hometype"=>$data_hometype,"report"=>$report];
                return self::JsonExport(200,'success',$data);
            }catch(\Exception $ex){
                return self::JsonExport(500,'Server Internal');
            }
        }
    }
}

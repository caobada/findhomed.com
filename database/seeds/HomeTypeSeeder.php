<?php

use Illuminate\Database\Seeder;
use App\HomeType;
class HomeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Hometype::create( [
            'id'=>1,
            'nametype'=>'Cho thuê phòng trọ',
            'nametypelink'=>'cho-thue-phong-tro',
            'status'=>1,
            'created_at'=>'2018-05-24 21:01:31',
            'updated_at'=>'2018-06-14 10:15:38',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Hometype::create( [
            'id'=>2,
            'nametype'=>'Cho thuê nhà nguyên căn',
            'nametypelink'=>'cho-thue-nha-nguyen-can',
            'status'=>1,
            'created_at'=>'2018-05-24 17:00:00',
            'updated_at'=>'2018-05-24 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Hometype::create( [
            'id'=>3,
            'nametype'=>'Cho thuê mặt bằng',
            'nametypelink'=>'cho-thue-mat-bang',
            'status'=>1,
            'created_at'=>'2018-05-24 17:00:00',
            'updated_at'=>'2018-05-24 17:00:00',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Hometype::create( [
            'id'=>4,
            'nametype'=>'Tìm người ở ghép',
            'nametypelink'=>'tim-nguoi-o-ghep',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
            
            
                        
            Hometype::create( [
            'id'=>5,
            'nametype'=>'Cho thuê căn hộ',
            'nametypelink'=>'cho-thue-can-ho',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'deleted_at'=>NULL
            ] );
    }
}

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
            'status'=>1
            ] );
            
            
                        
            Hometype::create( [
            'id'=>2,
            'nametype'=>'Cho thuê nhà nguyên căn',
            'nametypelink'=>'cho-thue-nha-nguyen-can',
            'status'=>1
            ] );
            
            
                        
            Hometype::create( [
            'id'=>3,
            'nametype'=>'Cho thuê mặt bằng',
            'nametypelink'=>'cho-thue-mat-bang',
            'status'=>1

            ] );
            
            
                        
            Hometype::create( [
            'id'=>4,
            'nametype'=>'Tìm người ở ghép',
            'nametypelink'=>'tim-nguoi-o-ghep',
            'status'=>1

            ] );
            
            
                        
            Hometype::create( [
            'id'=>5,
            'nametype'=>'Cho thuê căn hộ',
            'nametypelink'=>'cho-thue-can-ho',
            'status'=>1

            ] );
    }
}

<?php

use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create( [
            'id'=>1,
            'name'=>'add',
            'display_name'=>'Thêm',
            'description'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Permission::create( [
            'id'=>2,
            'name'=>'delete',
            'display_name'=>'Xóa',
            'description'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Permission::create( [
            'id'=>3,
            'name'=>'edit',
            'display_name'=>'Sửa',
            'description'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Permission::create( [
            'id'=>1,
            'name'=>1
            ] );
            
            
                        
            Permission::create( [
            'id'=>1,
            'name'=>3
            ] );
            
            
                        
            Permission::create( [
            'id'=>2,
            'name'=>1
            ] );
            
            
                        
            Permission::create( [
            'id'=>3,
            'name'=>1
            ] );
            
            
                        
            Permission::create( [
            'id'=>3,
            'name'=>3
            ] );
            
            
                        
            Permission::create( [
            'id'=>1,
            'name'=>'admin',
            'display_name'=>'Admin',
            'description'=>NULL,
            'created_at'=>'2018-06-12 17:00:00',
            'updated_at'=>'2018-06-12 17:00:00'
            ] );
            
            
                        
            Permission::create( [
            'id'=>2,
            'name'=>'user',
            'display_name'=>'User',
            'description'=>NULL,
            'created_at'=>'2018-06-12 17:00:00',
            'updated_at'=>'2018-06-12 17:00:00'
            ] );
            
            
                        
            Permission::create( [
            'id'=>3,
            'name'=>'owner',
            'display_name'=>'Owner',
            'description'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Permission::create( [
            'id'=>1,
            'name'=>1
            ] );
            
            
                        
            Permission::create( [
            'id'=>32,
            'name'=>2
            ] );
            
            
                        
            Permission::create( [
            'id'=>36,
            'name'=>2
            ] );
            
            
                        
            Permission::create( [
            'id'=>37,
            'name'=>2
            ] );
    }
}

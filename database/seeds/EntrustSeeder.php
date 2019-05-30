<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\RoleUser;
class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            
                        
            Role::create( [
            'id'=>1,
            'name'=>'admin',
            'display_name'=>'Admin',
            'description'=>NULL,
            'created_at'=>'2018-06-12 17:00:00',
            'updated_at'=>'2018-06-12 17:00:00'
            ] );
            
            
                        
            Role::create( [
            'id'=>2,
            'name'=>'user',
            'display_name'=>'User',
            'description'=>NULL,
            'created_at'=>'2018-06-12 17:00:00',
            'updated_at'=>'2018-06-12 17:00:00'
            ] );
            
            
                        
            Role::create( [
            'id'=>3,
            'name'=>'owner',
            'display_name'=>'Owner',
            'description'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            RoleUser::create( [
            'user_id'=>1,
            'role_id'=>1
            ] );
            
    }
}

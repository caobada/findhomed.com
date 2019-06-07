<?php

use Illuminate\Database\Seeder;
use App\OptionSearch;
use App\Option;
class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Option search
        OptionSearch::create(
            [
                'type'=> 1, //khoang gia
                'option'=> 1, // duoi
                'from' => 1,
                'value_name' => 1
            ],
            [
                'type'=> 1, //khoang gia 
                'option'=> 3, // khoang
                'from' => 1,
                'to' => 5,
                'value_name' => 1
            ],
            [
                'type'=> 1, //khoang gia 
                'option'=> 3, // khoang
                'from' => 5,
                'to' => 10,
                'value_name' => 1
            ],
            [
                'type'=> 1, //khoang gia 
                'option'=> 2, // khoang
                'from' => 10,
                'value_name' => 1
            ],
            //dien tich
            [
                'type'=> 2, //khoang gia
                'option'=> 1, // duoi
                'from' => 1,
                'value_name' => 3
            ],
            [
                'type'=> 2, //khoang gia 
                'option'=> 3, // khoang
                'from' => 1,
                'to' => 5,
                'value_name' => 3
            ],
            [
                'type'=> 2, //khoang gia 
                'option'=> 3, // khoang
                'from' => 5,
                'to' => 10,
                'value_name' => 3
            ],
            [
                'type'=> 2, //khoang gia 
                'option'=> 2, // khoang
                'from' => 10,
                'value_name' => 3
            ]

        );
    
    }
}

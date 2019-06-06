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
                'name' => 1,
                'value_name' => 1
            ],
            [
                'type'=> 1, //khoang gia // from // to
                'option'=> 3, // khoang
                'name' => 1,
                'value_name' => 1
            ]

        );
    
    }
}

<?php

use Illuminate\Database\Seeder;
use App\TypeMeasure;
class TypeMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TypeMeasure::create([
            'type' => 1,
            'name' => 1,
            'value' => 'Triệu/Tháng'
        ]);
        TypeMeasure::create([
            'type' => 1,
            'name' => 2,
            'value' => 'Nghìn/Tháng'
        ]);

        TypeMeasure::create([
            'type' => 2,
            'name' => 1,
            'value' => 'm2'
        ]);
    }
}

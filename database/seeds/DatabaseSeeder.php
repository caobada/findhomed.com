<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $this->call(TypeMeasureSeeder::class);
      $this->call(HomeTypeSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(HomeSeeder::class);
      $this->call(ProvinceSeeder::class);
      $this->call(OptionSeeder::class);
      $this->call(DistrictSeeder::class);
      $this->call(WardSeeder::class);
      $this->call(EntrustSeeder::class);
      $this->call(ReportSeeder::class);
    }
}
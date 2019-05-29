<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('district',function(Blueprint $table){
            $table->tinyInteger('districtid')->unique;
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->tinyInteger('provinceid');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('province',function(Blueprint $table){
            $table->tinyInteger('provinceid')->unique;
            $table->string('name');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ward',function(Blueprint $table){
            $table->tinyInteger('wardid')->unique;
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->tinyInteger('districtid');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

    }
}

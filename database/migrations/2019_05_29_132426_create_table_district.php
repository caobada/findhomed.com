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
        Schema::dropIfExists('district');
        Schema::dropIfExists('province');
        Schema::dropIfExists('ward');


        Schema::create('district',function(Blueprint $table){
            $table->integer('districtid')->unique;
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->integer('provinceid');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('province',function(Blueprint $table){
            $table->integer('provinceid')->unique;
            $table->string('name');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ward',function(Blueprint $table){
            $table->integer('wardid')->unique;
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->integer('districtid');
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
        Schema::dropIfExists('district');
        Schema::dropIfExists('province');
        Schema::dropIfExists('ward');

    }
}

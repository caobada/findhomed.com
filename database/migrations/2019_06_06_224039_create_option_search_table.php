<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('option_search');
        Schema::create('option_search',function(Blueprint $table){
            $table->increments('id');
            $table->tinyInteger('type')->comment('1: khoảng giá, 2: diện tích');
            $table->tinyInteger('option')->comment('1: dưới, 2: trên, 3: khoảng');
            $table->double('from');
            $table->double('to')->nullable();
            $table->string('value_name');
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
        Schema::dropIfExists('option_search');
    }
}

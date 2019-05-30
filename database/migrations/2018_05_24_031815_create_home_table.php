<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('home');
        Schema::create('home',function(Blueprint $table){
            $table->increments('home_id');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('hometype')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->text('desc');
            $table->string('price');
            $table->string('area');
            $table->string('phone_home');
            $table->string('street');
            $table->string('district');
            $table->string('city');
            $table->string('location_map')->nullable();
            $table->text('image');
            $table->integer('view');
            $table->integer('hienthi');
            $table->integer('doituong');
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
        Schema::drop('home');
    }
}

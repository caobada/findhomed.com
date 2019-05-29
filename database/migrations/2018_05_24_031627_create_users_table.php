<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		//
		Schema::dropIfExists('users');
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->integer('status');
			$table->string('email');
			$table->string('provider');
			$table->string('provider_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
		Schema::drop('users');
	}
}

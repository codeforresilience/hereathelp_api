<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $t) {
			$t->increments('id');
			$t->string('username', 35)->unique();
			$t->string('password');
			$t->string('email', 100);
			$t->string('confirmation_code');
			$t->boolean('confirmed')->default(false);
			$t->string('first_name');
			$t->string('middle_name');
			$t->string('last_name');
			$t->string('position');
			$t->string('contacts');
			$t->timestamps();
			$t->softDeletes();
		});

		Schema::create('events', function (Blueprint $t) {
			$t->increments('id');
			$t->string('location');
			$t->string('geobounds');
			$t->integer('est_alive');
			$t->integer('est_dead');
			$t->integer('category_id')->unsigned();
			$t->timestamps();
			$t->softDeletes();
		});

		// disasters
		Schema::create('categories', function (Blueprint $t) {
			$t->increments('id');
			$t->string('slug');
			$t->string('title');
			$t->string('description', 512);
		});

		Schema::create('provisions', function (Blueprint $t) {
			$t->increments('id');
			$t->integer('need_id')->unsigned();
			$t->integer('event_id')->unsigned();
			$t->text('content');
			$t->timestamps();
			$t->softDeletes();
		});

		Schema::create('needs', function (Blueprint $t) {
			$t->increments('id');
			$t->string('slug');
			$t->string('title');
			$t->string('description', 512);
		});

		Schema::create('messages', function (Blueprint $t) {
			$t->increments('id');
			$t->string('message');
			$t->integer('user_id')->unsigned();
			$t->integer('event_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('events');
		Schema::drop('categories');
		Schema::drop('event_category');
		Schema::drop('provisions');
		Schema::drop('messages');
	}

}

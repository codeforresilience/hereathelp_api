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

		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->timestamps();
		});

		// Creates the assigned_roles (Many-to-Many relation) table
		Schema::create('assigned_roles', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users'); // assumes a users table
			$table->foreign('role_id')->references('id')->on('roles');
		});

		// Creates the permissions table
		Schema::create('permissions', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('display_name');
			$table->timestamps();
		});

		// Creates the permission_role (Many-to-Many relation) table
		Schema::create('permission_role', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('permission_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->foreign('permission_id')->references('id')->on('permissions'); // assumes a users table
			$table->foreign('role_id')->references('id')->on('roles');
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

		Schema::table('assigned_roles', function(Blueprint $table) {
			$table->dropForeign('assigned_roles_user_id_foreign');
			$table->dropForeign('assigned_roles_role_id_foreign');
		});

		Schema::table('permission_role', function(Blueprint $table) {
			$table->dropForeign('permission_role_permission_id_foreign');
			$table->dropForeign('permission_role_role_id_foreign');
		});

		Schema::drop('assigned_roles');
		Schema::drop('permission_role');
		Schema::drop('roles');
		Schema::drop('permissions');
	}

}

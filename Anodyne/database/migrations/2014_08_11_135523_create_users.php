<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('username')->unique();
			$table->string('email');
			$table->string('password');
			$table->text('url')->nullable();
			$table->text('bio')->nullable();
			$table->string('avatar')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('google')->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('sessions', function(Blueprint $table)
		{
			$table->string('id')->unique();
			$table->text('payload');
			$table->integer('last_activity');
		});

		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('assigned_roles', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users'); // assumes a users table
			$table->foreign('role_id')->references('id')->on('roles');
		});

		Schema::create('permissions', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('display_name');
			$table->timestamps();
			$table->softDeletes();
		});

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
		Schema::table('assigned_roles', function(Blueprint $table)
		{
			$table->dropForeign('assigned_roles_user_id_foreign');
			$table->dropForeign('assigned_roles_role_id_foreign');
		});

		Schema::table('permission_role', function(Blueprint $table)
		{
			$table->dropForeign('permission_role_permission_id_foreign');
			$table->dropForeign('permission_role_role_id_foreign');
		});

		Schema::dropIfExists('assigned_roles');
		Schema::dropIfExists('permission_role');
		Schema::dropIfExists('roles');
		Schema::dropIfExists('permissions');
		Schema::dropIfExists('users');
		Schema::dropIfExists('sessions');
	}

}
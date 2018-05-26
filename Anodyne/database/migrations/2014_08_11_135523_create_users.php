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
		Schema::create('core_users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('username')->unique();
			$table->string('email');
			$table->string('password');
			$table->text('url')->nullable();
			$table->text('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('google')->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('core_sessions', function(Blueprint $table)
		{
			$table->string('id')->unique();
			$table->text('payload');
			$table->integer('last_activity');
		});

		Schema::create('core_roles', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('core_assigned_roles', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->integer('role_id')->unsigned();
			//$table->foreign('user_id')->references('id')->on('users'); // assumes a users table
			//$table->foreign('role_id')->references('id')->on('roles');
		});

		Schema::create('core_permissions', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('display_name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('core_permission_role', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('permission_id')->unsigned();
			$table->integer('role_id')->unsigned();
			//$table->foreign('permission_id')->references('id')->on('permissions'); // assumes a users table
			//$table->foreign('role_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('core_assigned_roles', function(Blueprint $table)
		{
			//$table->dropForeign('core_assigned_roles_user_id_foreign');
			//$table->dropForeign('core_assigned_roles_role_id_foreign');
		});

		Schema::table('core_permission_role', function(Blueprint $table)
		{
			//$table->dropForeign('core_permission_role_permission_id_foreign');
			//$table->dropForeign('core_permission_role_role_id_foreign');
		});

		Schema::dropIfExists('core_assigned_roles');
		Schema::dropIfExists('core_permission_role');
		Schema::dropIfExists('core_roles');
		Schema::dropIfExists('core_permissions');
		Schema::dropIfExists('core_users');
		Schema::dropIfExists('core_sessions');
	}

}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForumFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->bigInteger('points')->default(0)->after('url');
			$table->text('signature')->nullable()->after('bio');
		});

		// Permissions for the forums

		// Roles for the forums

		// Update users with the new roles
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('points');
			$table->dropColumn('signature');
		});
	}

}

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

		/**
		 * Permissions for the forums
		 */
		$permissions = [
			['display_name' => "Forums Admin", 'name' => "forums.admin"],
			
			['display_name' => "Create Discussions", 'name' => "forums.discussion.create"],
			['display_name' => "Edit Discussions", 'name' => "forums.discussion.edit"],
			['display_name' => "Delete Discussions", 'name' => "forums.discussion.delete"],
			
			['display_name' => "Create Posts", 'name' => "forums.post.create"],
			['display_name' => "Edit Posts", 'name' => "forums.post.edit"],
			['display_name' => "Delete Posts", 'name' => "forums.post.delete"],
		];
		
		$permissionAssociations = [
			'forums.admin' => "Forums Administrator",
			
			'forums.discussion.create' => "Forums User",
			'forums.discussion.edit' => "Forums Administrator",
			'forums.discussion.delete' => "Forums Administrator",
			
			'forums.post.create' => "Forums User",
			'forums.post.edit' => "Forums Administrator",
			'forums.post.delete' => "Forums Administrator",
		];
		
		$permIds = [];
		
		$roleAssociations = [];
		
		foreach ($permissions as $permission)
		{
			$perm = Permission::create($permission);
			
			$permIds[] = $perm->id;
			
			$roleAssociations[$permissionAssociations[$perm->name]][] = $perm->id;
		}

		/**
		 * Roles for the forums
		 */
		$roles = [
			['name' => "Forums Administrator"],
			['name' => "Forums User"],
		];
		
		$finalRoles = [];
		
		foreach ($roles as $r)
		{
			// Create the role
			$role = Role::create($r);
			
			// Store the role information so we can use it to attach for users
			$finalRoles[$role->name] = $role->id;
			
			// Attach the proper permissions to the role
			foreach ($roleAssociations[$role->name] as $ra)
			{
				$role->perms()->attach($ra);
			}
		}

		// Give every user the Forums User role
		foreach (User::all() as $user)
		{
			$user->roles()->attach($finalRoles["Forums User"]);
		}
		
		// Now give me Forums Administrator powers
		User::first()->roles()->attach($finalRoles["Forums Administrator"]);
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
		
		// Clear the user roles
		foreach (User::all() as $user)
		{
			$user->roles()->detach(Role::where("name", "Forums User")->first()->id);
		}
		
		User::first()->roles()->detach(Role::where("name", "Forums Administrator")->first()->id);
		
		// Remove the roles
		Role::where('name', 'like', "Forums %")->delete();
		
		// Remove the permissions
		Permission::where('name', 'like', 'forums.%')->delete();
	}

}

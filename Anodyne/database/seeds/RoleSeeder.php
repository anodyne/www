<?php

class RoleSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$permissions = [
			['display_name' => "Create Xtra", 'name' => "xtras.item.create"],
			['display_name' => "Edit Xtra", 'name' => "xtras.item.edit"],
			['display_name' => "Delete Xtra", 'name' => "xtras.item.delete"],
			['display_name' => "Skin Xtras", 'name' => "xtras.item.skins"],
			['display_name' => "MOD Xtras", 'name' => "xtras.item.mods"],
			['display_name' => "Rank Xtras", 'name' => "xtras.item.ranks"],
			['display_name' => "Xtras Admin", 'name' => "xtras.admin"],

			['display_name' => "Help Admin", 'name' => "help.admin"],
			['display_name' => "Create Articles", 'name' => "help.article.create"],
			['display_name' => "Edit Articles", 'name' => "help.article.edit"],
			['display_name' => "Delete Articles", 'name' => "help.article.delete"],

			['display_name' => "Anodyne Admin", 'name' => "www.admin"],
			['display_name' => "Manage Users", 'name' => "www.admin.users"],
			['display_name' => "Manage Permissions", 'name' => "www.admin.permissions"],
		];

		foreach ($permissions as $permission)
		{
			Permission::create($permission);
		}

		$roles = [
			['name' => "Xtras Administrator"],
			['name' => "Xtras User"],
			['name' => "Xtras Skins"],
			['name' => "Xtras MODs"],
			['name' => "Xtras Rank Sets"],

			['name' => "Help Administrator"],
			['name' => "Help Article Author"],

			['name' => "Users Administrator"],
		];

		$roleAssociations = [
			1 => [7],
			2 => [1, 2, 3],
			3 => [4],
			4 => [5],
			5 => [6],

			6 => [8, 10, 11],
			7 => [9],

			8 => [12, 13, 14],
		];

		foreach ($roles as $r)
		{
			$role = Role::create($r);

			foreach ($roleAssociations[$role->id] as $ra)
			{
				$role->perms()->attach($ra);
			}
		}
	}

}
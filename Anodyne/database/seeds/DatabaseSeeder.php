<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Unguard the models
		Eloquent::unguard();

		$this->call('RoleSeeder');
		$this->call('UserSeeder');
	}

}
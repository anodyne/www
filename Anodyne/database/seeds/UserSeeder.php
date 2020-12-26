<?php

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = [
			[
				'name'		=> "Anodyne Productions",
				'email'		=> "admin@anodyne-productions.com",
				'password'	=> "password",
				'url'		=> "https://anodyne-productions.com",
				'username'	=> 'anodyne',
				'access'	=> [1, 2, 3, 4, 5, 6, 7, 8],
				'twitter'	=> '@anodyneprod',
				'facebook'	=> 'https://facebook.com/anodyneproductions',
			]
		];

		if (App::environment() != 'production')
		{
			$users[] = [
				'name'		=> "David VanScott",
				'email'		=> "david@example.com",
				'password'	=> "password",
				'username'	=> 'agentphoenix',
				'access'	=> [2, 3, 4],
			];

			$faker = Faker\Factory::create();

			for ($i = 1; $i < 99; $i++)
			{
				$users[] = [
					'name' => $faker->firstName(null)." ".$faker->lastName(null),
					'email' => $faker->safeEmail,
					'password' => 'password',
					'url' => $faker->url,
					'username' => $faker->userName,
					'access' => [2, 3, 4],
				];
			}
		}

		foreach ($users as $user)
		{
			// Grab the access level(s)
			$access = (is_array($user['access'])) ? (array) $user['access'] : [(int) $user['access']];
			unset($user['access']);

			// Create the user
			$user = User::create($user);

			// Attach the role(s)
			$user->roles()->sync($access);
		}
	}

}
<?php namespace Anodyne\Users\Data\Repositories\Eloquent;

use UserModel,
	UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

	public function all()
	{
		return UserModel::paginate(25);
	}

	public function count()
	{
		return UserModel::count();
	}

	public function create(array $data)
	{
		// Create the user
		$user = UserModel::create($data);

		// Set permissions for the user
		$user->roles()->sync(\Roles::getDefaultRoles());

		return $user;
	}

	public function delete($id)
	{
		// Get the user
		$user = $this->find($id);

		if ($user)
		{
			$user->delete();

			return $user;
		}

		return false;
	}

	public function find($id)
	{
		return UserModel::find($id);
	}

	public function findByUsername($username)
	{
		return UserModel::with('roles', 'roles.perms')
			->username($username)->first();
	}

	public function update($username, array $data)
	{
		// Find the user
		$user = $this->findByUsername($username);

		if ($user)
		{
			$user->fill($data);
			$user->save();

			// Update the user roles if we have them
			if (array_key_exists('access', $data))
			{
				$user->roles()->sync($data['access']);
			}

			return $user;
		}

		return false;
	}

}
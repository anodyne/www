<?php namespace Anodyne\Users\Data\Repositories\Eloquent;

use RoleModel,
	RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface {

	public function all($value = false, $id = false)
	{
		if ( ! $value)
		{
			return RoleModel::orderBy('name', 'asc')->get();
		}

		return RoleModel::orderBy('name', 'asc')->lists($value, $id);
	}

	public function create(array $data)
	{
		// Create the role
		$role = RoleModel::create($data);

		if (array_key_exists('access', $data))
		{
			$role->perms()->sync($data['access']);
		}

		return $role;
	}

	public function delete($id)
	{
		// Get the role
		$role = $this->find($id);

		if ($role)
		{
			// Remove any users with this permission
			if ($role->users->count() > 0)
			{
				foreach ($role->users as $user)
				{
					$user->roles()->detach($role->id);
				}
			}

			// Remove any permissions attached to the role
			if ($role->perms->count() > 0)
			{
				foreach ($role->perms as $permission)
				{
					$permission->roles()->detach($role->id);
				}
			}

			// Delete the role
			$role->delete();

			return $role;
		}

		return false;
	}

	public function find($id)
	{
		return RoleModel::find($id);
	}

	public function paginate($number)
	{
		return RoleModel::orderBy('name', 'asc')->paginate($number);
	}

	public function update($id, array $data)
	{
		// Get the role
		$role = $this->find($id);

		if ($role)
		{
			// Update the role
			$role->fill($data);
			$role->save();

			// Update the permissions
			if (array_key_exists('access', $data))
			{
				$role->perms()->sync($data['access']);
			}

			return $role;
		}

		return false;
	}

}
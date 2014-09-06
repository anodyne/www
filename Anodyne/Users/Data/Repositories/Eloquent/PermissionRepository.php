<?php namespace Anodyne\Users\Data\Repositories\Eloquent;

use PermissionModel,
	PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface {

	public function all($value = false, $id = false)
	{
		if ( ! $value)
		{
			return PermissionModel::orderBy('name', 'asc')->get();
		}

		return PermissionModel::orderBy('name', 'asc')->lists($value, $id);
	}

	public function create(array $data)
	{
		// Create the role
		$role = PermissionModel::create($data);

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
			// Remove the permission from any roles
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
		return PermissionModel::find($id);
	}

	public function paginate($number)
	{
		return PermissionModel::orderBy('name', 'asc')->paginate($number);
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
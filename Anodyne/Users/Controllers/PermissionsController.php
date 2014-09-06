<?php namespace Anodyne\Users\Controllers;

use View,
	Event,
	Flash,
	Input,
	Redirect,
	PermissionRepositoryInterface;

class PermissionsController extends \BaseController {

	protected $permissions;

	public function __construct(PermissionRepositoryInterface $permissions)
	{
		parent::__construct();

		$this->permissions = $permissions;
	}

	public function index()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.permissions.index')
				->withPermissions($this->permissions->paginate(25));
		}

		return $this->errorUnauthorized("You do not have permission to manage permissions!");
	}

	public function create()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.permissions.create');
		}

		return $this->errorUnauthorized("You do not have permission to create permissions!");
	}

	public function store()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Validate

			// Store the permission
			$permission = $this->permissions->create(Input::all());

			// Fire the event
			Event::fire('permission.created', [$permission->id, Input::all()]);

			// Set the flash message
			Flash::success("Permission was successfully created.");

			return Redirect::route('admin.permissions.index');
		}

		return $this->errorUnauthorized("You do not have permission to create permissions!");
	}

	public function edit($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Get the permission
			$permission = $this->permissions->find($id);

			if ($permission)
			{
				return View::make('pages.permissions.edit')
					->withPermission($permission);
			}

			return $this->errorNotFound("No permission with that ID could be found!");
		}

		return $this->errorUnauthorized("You do not have permission to update permissions!");
	}

	public function update($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Validate

			// Update the permission
			$permission = $this->permissions->update($id, Input::all());

			// Fire the event
			Event::fire('permission.updated', [$permission->id, Input::all()]);

			// Set the flash message
			Flash::success("Permission was successfully updated.");

			return Redirect::route('admin.permissions.index');
		}

		return $this->errorUnauthorized("You do not have permission to update permissions!");
	}

	public function delete($id)
	{
		// Get the permission
		$permission = $this->permissions->find($id);

		if ($permission)
		{
			return View::make('partials.modal_content', [
				'modalHeader'	=> "Delete Permission",
				'modalBody'		=> View::make('pages.permissions.delete')->withPermission($permission),
				'modalFooter'	=> false,
			]);
		}
	}

	public function destroy($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Remove the permission
			$permission = $this->permissions->delete($id);

			// Fire the event
			Event::fire('permission.deleted', [$permission->id]);

			// Set the flash message
			Flash::success("Permission was successfully deleted.");

			return Redirect::route('admin.permissions.index');
		}

		return $this->errorUnauthorized("You do not have permission to delete permissions!");
	}

}
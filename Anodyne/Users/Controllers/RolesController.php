<?php namespace Anodyne\Users\Controllers;

use View,
	Event,
	Flash,
	Input,
	Redirect,
	RoleRepositoryInterface,
	PermissionRepositoryInterface;

class RolesController extends \BaseController {

	protected $roles;
	protected $permissions;

	public function __construct(RoleRepositoryInterface $roles,
			PermissionRepositoryInterface $permissions)
	{
		parent::__construct();

		$this->roles = $roles;
		$this->permissions = $permissions;
	}

	public function index()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.roles.index')
				->withRoles($this->roles->paginate(25));
		}

		return $this->errorUnauthorized("You do not have permission to manage roles!");
	}

	public function create()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.roles.create')
				->withPermissions($this->permissions->all('display_name', 'id'));
		}

		return $this->errorUnauthorized("You do not have permission to create roles!");
	}

	public function store()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Validate

			// Store the role
			$role = $this->roles->create(Input::all());

			// Fire the event
			Event::fire('role.created', [$role->id, Input::all()]);

			// Set the flash message
			Flash::success("Role was successfully created.");

			return Redirect::route('admin.roles.index');
		}

		return $this->errorUnauthorized("You do not have permission to create roles!");
	}

	public function edit($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Get the role
			$role = $this->roles->find($id);

			if ($role)
			{
				return View::make('pages.roles.edit')
					->withRole($role)
					->withPermissions($this->permissions->all('display_name', 'id'))
					->withRolePermissions($role->perms->lists('display_name', 'id'));
			}

			return $this->errorNotFound("No role with that ID could be found!");
		}

		return $this->errorUnauthorized("You do not have permission to update roles!");
	}

	public function update($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Validate

			// Update the role
			$role = $this->roles->update($id, Input::all());

			// Fire the event
			Event::fire('role.updated', [$role->id, Input::all()]);

			// Set the flash message
			Flash::success("Role was successfully updated.");

			return Redirect::route('admin.roles.index');
		}

		return $this->errorUnauthorized("You do not have permission to update roles!");
	}

	public function delete($id)
	{
		// Get the role
		$role = $this->roles->find($id);

		if ($role)
		{
			return View::make('partials.modal_content', [
				'modalHeader'	=> "Delete Role",
				'modalBody'		=> View::make('pages.roles.delete')->withRole($role),
				'modalFooter'	=> false,
			]);
		}
	}

	public function destroy($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Remove the role
			$role = $this->roles->delete($id);

			// Fire the event
			Event::fire('role.deleted', [$role->id]);

			// Set the flash message
			Flash::success("Role was successfully deleted.");

			return Redirect::route('admin.roles.index');
		}

		return $this->errorUnauthorized("You do not have permission to delete users!");
	}

}
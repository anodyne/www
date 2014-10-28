<?php namespace Anodyne\Users\Controllers;

use View,
	Event,
	Flash,
	Input,
	Redirect,
	RoleRepositoryInterface,
	UserRepositoryInterface;

class UsersController extends \BaseController {

	protected $roles;
	protected $users;

	public function __construct(UserRepositoryInterface $users,
			RoleRepositoryInterface $roles)
	{
		parent::__construct();

		$this->roles = $roles;
		$this->users = $users;
	}

	public function index()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.users.index')
				->withUsers($this->users->all());
		}

		return $this->errorUnauthorized("You do not have permission to manage users!");
	}

	public function create()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			return View::make('pages.users.create')
				->withRoles($this->roles->all('name', 'id'));
		}

		return $this->errorUnauthorized("You do not have permission to create users!");
	}

	public function store()
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Validate

			// Store the user
			$user = $this->users->create(Input::all());

			// Fire the event
			Event::fire('user.created', [$user->id, Input::all()]);

			// Set the flash message
			Flash::success("User was successfully created.");

			return Redirect::route('admin.users.index');
		}

		return $this->errorUnauthorized("You do not have permission to create users!");
	}

	public function edit($username)
	{
		// Get the user
		$user = ($this->currentUser->username == $username)
			? $this->currentUser
			: $this->users->findByUsername($username);

		if ($user)
		{
			return View::make('pages.users.edit')
				->withUser($user)
				->withRoles($this->roles->all('name', 'id'))
				->withUserRoles($user->roles->lists('name', 'id'));
		}

		return $this->errorNotFound("No user with that username could be found!");
	}

	public function update($username)
	{
		if ($this->currentUser->can('www.admin.users') or $this->currentUser->username == $username)
		{
			// Validate

			if (Input::has('formAction'))
			{
				// Get the user
				$u = $this->users->findByUsername($username);

				if (\Hash::check(Input::get('password_old'), $u->password))
				{
					// Update the user
					$this->users->update($username, ['password' => Input::get('password')]);

					// Set the flash message
					Flash::success("Your password was successfully changed.");

					return Redirect::route('admin.users.edit', [$username]);
				}
				else
				{
					// Set the flash message
					Flash::error("Your password was wrong. Please try again.");

					return Redirect::route('admin.users.edit', [$username]);
				}
			}
			else
			{
				// Update the user
				$user = $this->users->update($username, Input::all());
			}

			// Fire the event
			Event::fire('user.updated', [$user->id, Input::all()]);

			if ($this->currentUser->can('www.admin.users'))
			{
				// Set the flash message
				Flash::success("User was successfully updated.");

				return Redirect::route('admin.users.index');
			}
			else
			{
				// Set the flash message
				Flash::success("Your account has been updated.");

				return Redirect::route('admin.users.edit', [$username]);
			}
		}

		return $this->errorUnauthorized("You do not have permission to update users.");
	}

	public function delete($username)
	{
		// Get the user
		$user = $this->users->findByUsername($username);

		if ($user)
		{
			return View::make('partials.modal_content', [
				'modalHeader'	=> "Delete User",
				'modalBody'		=> View::make('pages.users.delete')->withUser($user),
				'modalFooter'	=> false,
			]);
		}
	}

	public function destroy($id)
	{
		if ($this->currentUser->can('www.admin.users'))
		{
			// Remove the user
			$user = $this->users->delete($id);

			// Fire the event
			Event::fire('user.deleted', [$user->id]);

			// Set the flash message
			Flash::success("User was successfully deleted.");

			return Redirect::route('admin.users.index');
		}

		return $this->errorUnauthorized("You do not have permission to delete users!");
	}

	public function changePassword($id)
	{
		// Get the user
		$user = $this->users->find($id);

		if ($this->currentUser->id == $user->id)
		{
			return partial('modal_content', array(
				'modalHeader'	=> "Change Password",
				'modalBody'		=> View::make('pages.users.change-password')->with('user', $user),
				'modalFooter'	=> false,
			));
		}
	}

}
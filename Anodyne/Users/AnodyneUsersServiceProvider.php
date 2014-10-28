<?php namespace Anodyne\Users;

use App,
	Event,
	Route,
	Config;
use Illuminate\Support\ServiceProvider;

class AnodyneUsersServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->registerRoutes();
	}

	public function boot()
	{
		$this->setupClassBindings();
		$this->registerEventListeners();
	}

	protected function registerRoutes()
	{
		$options = [
			'namespace' => 'Anodyne\\Users\\Controllers',
		];

		$adminOptions = [
			'before'	=> 'auth',
			'prefix'	=> 'admin',
			'namespace'	=> 'Anodyne\\Users\\Controllers',
		];

		$passwordOptions = [
			'prefix'	=> 'password',
			'namespace'	=> 'Anodyne\\Users\\Controllers',
		];

		Route::group($options, function()
		{
			Route::get('register', [
				'as'	=> 'register',
				'uses'	=> 'RegistrationController@register']);
			Route::post('register', [
				'as'	=> 'register.do',
				'uses'	=> 'RegistrationController@doRegistration']);

			Route::get('login', [
				'as'	=> 'login',
				'uses'	=> 'LoginController@login']);
			Route::post('login', [
				'as'	=> 'login.do',
				'uses'	=> 'LoginController@doLogin']);
			Route::get('logout', [
				'as'	=> 'logout',
				'uses'	=> 'LoginController@logout']);
		});

		Route::group($passwordOptions, function()
		{
			Route::get('remind', [
				'as'	=> 'password.remind',
				'uses'	=> 'RemindersController@remind']);
			Route::post('remind', [
				'as'	=> 'password.remind.do',
				'uses'	=> 'RemindersController@doRemind']);
			Route::get('reset/{token}', [
				'as'	=> 'password.reset',
				'uses'	=> 'RemindersController@reset']);
			Route::post('reset', [
				'as'	=> 'password.reset.do',
				'uses'	=> 'RemindersController@doReset']);
		});

		Route::group($adminOptions, function()
		{
			/**
			 * Users routes
			 */
			Route::resource('users', 'UsersController', ['except' => ['show']]);
			Route::get('users/{username}/edit', [
				'as'	=> 'users.edit',
				'uses'	=> 'UsersController@edit']);
			Route::put('users/{username}', [
				'as'	=> 'users.update',
				'uses'	=> 'UsersController@update']);
			Route::get('users/delete/{username}', 'UsersController@delete');
			Route::get('users/password/{id}', 'UsersController@changePassword');

			/**
			 * Roles routes
			 */
			Route::resource('roles', 'RolesController', ['except' => ['show']]);
			Route::get('roles/delete/{id}', 'RolesController@delete');

			/**
			 * Permissions routes
			 */
			Route::resource('permissions', 'PermissionsController', ['except' => ['show']]);
			Route::get('permissions/delete/{id}', 'PermissionsController@delete');
		});
	}

	protected function setupClassBindings()
	{
		// Get the class aliases
		$a = Config::get('app.aliases');

		// Set up bindings from the interface to their concrete classes
		App::bind($a['PermissionRepositoryInterface'], $a['PermissionRepository']);
		App::bind($a['RoleRepositoryInterface'], $a['RoleRepository']);
		App::bind($a['UserRepositoryInterface'], $a['UserRepository']);
	}

	protected function registerEventListeners()
	{
		$namespace = 'Anodyne\\Users\\Events\\';

		Event::listen('user.created', "{$namespace}UserEventHandler@onCreate");
		Event::listen('user.deleted', "{$namespace}UserEventHandler@onDelete");
		Event::listen('user.registered', "{$namespace}UserEventHandler@onRegister");
		Event::listen('user.updated', "{$namespace}UserEventHandler@onUpdate");

		Event::listen('role.created', "{$namespace}RoleEventHandler@onCreate");
		Event::listen('role.deleted', "{$namespace}RoleEventHandler@onDelete");
		Event::listen('role.updated', "{$namespace}RoleEventHandler@onUpdate");

		Event::listen('permission.created', "{$namespace}PermissionEventHandler@onCreate");
		Event::listen('permission.deleted', "{$namespace}PermissionEventHandler@onDelete");
		Event::listen('permission.updated', "{$namespace}PermissionEventHandler@onUpdate");
	}

}
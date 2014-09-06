<?php namespace Anodyne\Foundation\Controllers;

use Log,
	Auth,
	View,
	Request,
	Controller;

abstract class BaseController extends Controller {

	protected $currentUser;
	protected $layout = 'layouts.main';
	protected $request;

	public function __construct()
	{
		$this->currentUser	= (Auth::check()) ? Auth::getUser()->load('roles', 'roles.perms') : null;
		$this->request		= Request::instance();
	}

	protected function errorUnauthorized($message = false)
	{
		Log::error("{$this->currentUser->name} attempted to access {$this->request->fullUrl()}");

		if ($message)
		{
			return View::make('pages.error')->withError($message)->withType('danger');
		}
	}

	protected function errorNotFound($message = false)
	{
		Log::error("{$this->currentUser->name} attempted to reach {$this->request->fullUrl()}");

		if ($message)
		{
			return View::make('pages.error')->withError($message)->withType('warning');
		}
	}

}
<?php namespace Anodyne\Controllers;

use View;

class NovaController extends \BaseController {

	public function index()
	{
		return View::make('pages.nova.index');
	}

}
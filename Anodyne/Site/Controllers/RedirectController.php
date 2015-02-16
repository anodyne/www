<?php namespace Anodyne\Controllers;

use Redirect;

class RedirectController extends \BaseController {

	public function novaIndex()
	{
		return Redirect::route('nova.home');
	}

	public function homeIndex()
	{
		return Redirect::route('home');
	}

}
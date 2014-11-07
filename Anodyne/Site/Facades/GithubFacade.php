<?php namespace Anodyne\Facades;

use Illuminate\Support\Facades\Facade;

class GithubFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'github'; }

}
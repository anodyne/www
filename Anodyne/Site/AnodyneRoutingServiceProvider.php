<?php namespace Anodyne;

use Route;
use Illuminate\Support\ServiceProvider;

class AnodyneRoutingServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->mainRoutes();
		$this->novaRoutes();
		//$this->redirectedRoutes();
	}

	public function boot()
	{
		//
	}

	protected function mainRoutes()
	{
		$options = [
			'namespace'	=> 'Anodyne\Controllers',
		];

		Route::group($options, function()
		{
			Route::get('/', [
				'as'	=> 'home',
				'uses'	=> 'MainController@index']);
			Route::get('privacy', [
				'as'	=> 'privacy',
				'uses'	=> 'MainController@privacy']);
			Route::get('faqs', [
				'as'	=> 'faqs',
				'uses'	=> 'MainController@faqs']);
			Route::get('contact', [
				'as'	=> 'contact',
				'uses'	=> 'MainController@contact']);
			Route::post('contact', [
				'as'	=> 'contact.do',
				'uses'	=> 'MainController@doContact']);
		});
	}

	protected function novaRoutes()
	{
		$options = [
			'prefix'	=> 'nova',
			'namespace'	=> 'Anodyne\Controllers',
		];

		Route::group($options, function()
		{
			Route::get('/', [
				'as'	=> 'nova.home',
				'uses'	=> 'NovaController@index']);

			Route::get('nextgen', [
				'as'	=> 'nova.nextgen',
				'uses'	=> 'NovaController@nextgen']);
		});
	}

	public function redirectedRoutes()
	{
		Route::get('nova/index', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/browser', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/download', 'Anodyne\Controllers\RedirectController@novaIndex');

		Route::get('user', 'Anodyne\Controllers\RedirectController@homeIndex');
	}

}
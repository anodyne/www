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
		Route::get('main/index', 'Anodyne\Controllers\RedirectController@homeIndex');
		Route::get('main/about', 'Anodyne\Controllers\RedirectController@homeIndex');

		Route::get('news/post', 'Anodyne\Controllers\RedirectController@homeIndex');

		Route::get('sms/index', 'Anodyne\Controllers\RedirectController@homeIndex');
		Route::get('sms/license', 'Anodyne\Controllers\RedirectController@homeIndex');
		Route::get('sms/stats', 'Anodyne\Controllers\RedirectController@homeIndex');
		Route::get('sms/support', 'Anodyne\Controllers\RedirectController@homeIndex');

		Route::get('nova/index', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/browser', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/credits', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/download', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/preview', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/stats', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/whattheysaid', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/support', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/license', 'Anodyne\Controllers\RedirectController@novaIndex');
		Route::get('nova/development', 'Anodyne\Controllers\RedirectController@novaIndex');

		Route::get('user', 'Anodyne\Controllers\RedirectController@homeIndex');
	}

}
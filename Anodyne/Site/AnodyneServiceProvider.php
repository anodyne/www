<?php namespace Anodyne;

use App, Auth, View, Config;
use Ikimea\Browser\Browser;
use League\Flysystem\Filesystem,
	League\Flysystem\Adapter\Local;
use Illuminate\Support\ServiceProvider;

class AnodyneServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->registerBrowser();
		$this->registerMarkdown();
		$this->registerGithub();
		$this->registerFlashNotifier();
		$this->registerFilesystem();
	}

	public function boot()
	{
		$this->checkBrowser();
		$this->setupBindings();
	}

	protected function checkBrowser()
	{
		$this->app->before(function($request)
		{
			// Get the browser object
			$browser = App::make('browser');

			$supported = array(
				Browser::BROWSER_IE			=> 9,
				Browser::BROWSER_CHROME		=> 26,
				Browser::BROWSER_FIREFOX	=> 20,
			);

			if (array_key_exists($browser->getBrowser(), $supported) 
					and $browser->getVersion() < $supported[$browser->getBrowser()])
			{
				header("Location: browser.php");
				die();
			}
		});
	}

	protected function registerBrowser()
	{
		$this->app['browser'] = $this->app->share(function($app)
		{
			return new Browser;
		});
	}

	protected function registerMarkdown()
	{
		$this->app['markdown'] = $this->app->share(function($app)
		{
			return new Services\MarkdownService(new \Parsedown);
		});
	}

	protected function registerGithub()
	{
		$this->app['github'] = $this->app->share(function($app)
		{
			return new Services\GithubService(new \Github\Client);
		});
	}

	protected function registerFlashNotifier()
	{
		$this->app['flash'] = $this->app->share(function($app)
		{
			return new Services\FlashNotifierService($app['session.store']);
		});
	}

	protected function registerFilesystem()
	{
		$this->app['filesystem'] = $this->app->share(function($app)
		{
			return new Filesystem(new Local($_ENV['FS_PATH']));
		});
	}

	protected function setupBindings()
	{
		// Make sure we some variables available on all views
		View::share('_currentUser', Auth::user());
		View::share('_icons', Config::get('icons'));
	}

}
<?php namespace Jamil\User;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class UserProvider extends ServiceProvider {

	protected $namespace='Jamil\User\Http\Controllers';

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);
	}


	public function register()
	{
		$this->loadViewsFrom(__DIR__.'/Resources/View','User');
	}

	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require __DIR__.'/routes.php';

		});
	}


}

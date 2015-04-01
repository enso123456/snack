<?php  namespace Package\Directory;

use Illuminate\Support\ServiceProvider;

class DirectoryServiceProvider extends ServiceProvider {
	
	public function boot(){
		$this->package('package/directory');
		$this->bindRepositories();
		$this->app['view']->addNamespace('directory', __DIR__ . '/Views/');
	    //include routes
		include __DIR__."/routes.php";
		include __DIR__."/filters.php";
	}

	protected function bindRepositories(){
		$this->app->singleton('Package\Directory\Repositories\UserInterface', 'Package\Directory\Repositories\UserDatabase');
		$this->app->singleton('Package\Directory\Repositories\BusinessChainInterface', 'Package\Directory\Repositories\BusinessChainDB');
		$this->app->singleton('Package\Directory\Repositories\CategoriesInterface', 'Package\Directory\Repositories\CategoriesDB');
		$this->app->singleton('Package\Directory\Repositories\BusinessCategoryInterface', 'Package\Directory\Repositories\BusinessCategoryDB');
	}

	public function register(){
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Directory', 'Directory\Facades\Directory');
		});
	}

	public function provides()
	{
		return array();
	}
}


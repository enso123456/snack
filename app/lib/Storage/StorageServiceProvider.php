<?php  namespace Lib\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {
	
	public function boot(){
		// $this->package('package/directory');
		$this->bindRepositories();   
	}

	protected function bindRepositories(){
		$this->app->singleton('Lib\Repository\UsersInterface', 'Lib\Repository\UserDB');
		$this->app->singleton('Lib\Repository\FriendInterface', 'Lib\Repository\FriendDatabase');
		 
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


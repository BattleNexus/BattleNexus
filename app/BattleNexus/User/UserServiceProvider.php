<?php namespace BattleNexus\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
	public function boot()
	{
		include 'routes.php';
	}

	public function register()
	{
		// Right now I'm going to tightly couple on to Sentry as a dependency
		//$this->registerModels();
		//$this->registerRepositories();
	}

	protected function registerModels()
	{
		$this->app->bind(
			'BattleNexus\User\Models\UserModelInterface',
			'BattleNexus\User\Models\Eloquent\User'
		);
	}

	protected function registerRepositories()
	{
		$this->app->bind(
			'BattleNexus\User\Repositories\UserRepositoryInterface',
			'BattleNexus\User\Repositories\Eloquent\UserRepository'
		);
	}
}
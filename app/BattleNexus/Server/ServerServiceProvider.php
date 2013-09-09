<?php namespace BattleNexus\Server;

use Illuminate\Support\ServiceProvider;

class ServerServiceProvider extends ServiceProvider
{
	public function boot()
	{
		include 'routes.php';
	}

	public function register()
	{
		$this->registerModels();
		$this->registerRepositories();
	}

	protected function registerModels()
	{
		$this->app->bind(
			'BattleNexus\Server\Models\ServerInterface',
			'BattleNexus\Server\Models\Eloquent\Server'
		);
	}

	protected function registerRepositories()
	{
		$this->app->bind(
			'BattleNexus\Server\Repositories\ServerRepositoryInterface',
			'BattleNexus\Server\Repositories\Eloquent\ServerRepository'
		);
	}
}
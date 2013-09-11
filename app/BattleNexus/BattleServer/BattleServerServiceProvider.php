<?php namespace BattleNexus\BattleServer;

use Illuminate\Support\ServiceProvider;

class BattleServerServiceProvider extends ServiceProvider
{

	public function boot()
	{
		include 'routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerModels();
		$this->registerRepositories();
	}

	protected function registerModels()
	{
		$this->app->bind(
			'BattleNexus\BattleServer\Models\BattleServerInterface',
			'BattleNexus\BattleServer\Models\Eloquent\BattleServer'
		);
		$this->app->bind(
			'BattleNexus\BattleServer\Models\MinecraftGameInterface',
			'BattleNexus\BattleServer\Models\Eloquent\MinecraftGame'
		);
	}

	protected function registerRepositories()
	{
		$this->app->bind(
			'BattleNexus\BattleServer\Repositories\BattleServerRepositoryInterface',
			'BattleNexus\BattleServer\Repositories\Eloquent\BattleServerRepository'
		);
		$this->app->bind(
			'BattleNexus\BattleServer\Repositories\MinecraftGameRepositoryInterface',
			'BattleNexus\BattleServer\Repositories\Eloquent\MinecraftGameServerRepository'
		);
	}
}

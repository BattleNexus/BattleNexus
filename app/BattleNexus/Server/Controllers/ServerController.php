<?php namespace BattleNexus\Server\Controllers;

use BattleNexus\Server\Repositories\ServerRepositoryInterface;

class ServerController extends \BaseController
{
	/**
	 * @var \BattleNexus\Server\Repositories\ServerRepositoryInterface
	 */
	public $server;

	public function __construct(ServerRepositoryInterface $server)
	{
		$this->server = $server;
	}

	// battlenexus.net/servers
	public function index()
	{
		\Cache::rememberForever('servers', function() {
			return $this->server->all();
		});

		$this->layout->content = \View::make('servers.index')->with('servers', $this->server->all());
	}

	// battlenexus.net/servers/paintball
	public function show($name)
	{
		$this->layout->content = \View::make('servers.show')->with('server', $this->server->findByName($name));
	}
}
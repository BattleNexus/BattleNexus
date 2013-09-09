<?php namespace BattleNexus\Server\Repositories\Eloquent;

use BattleNexus\Server\Models\Eloquent\Server;
use BattleNexus\Server\Repositories\ServerRepositoryInterface;

class ServerRepository implements ServerRepositoryInterface
{
	/**
	 * @var Server
	 */
	protected $server;

	public function __construct(Server $server)
	{
		$this->server = $server;
	}

	public function all()
	{
		return $this->server->all();
	}

	public function create($attributes)
	{
		return $this->server->create($attributes);
	}

	public function find($id)
	{
		return $this->server->findOrFail($id);
	}

	public function findByName($name)
	{
		return $this->server->where('slug', $name)->firstOrFail();
	}

}
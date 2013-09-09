<?php namespace BattleNexus\BattleServer\Repositories\Eloquent;

use BattleNexus\BattleServer\Models\Eloquent\BattleServer;

class BattleServerRepository implements \BattleNexus\BattleServer\Repositories\BattleServerRepositoryInterface
{
	protected $server;

	public function __construct(BattleServer $server)
	{
		$this->server = $server;
	}

	/**
	 * Returns all servers
	 *
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface[]
	 */
	public function all()
	{
		return $this->server->all();
	}

	/**
	 * Creates a new BattleServer
	 *
	 * @param $attributes
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function create($attributes)
	{
		return $this->server->create($attributes);
	}

	/**
	 * Finds a server by its ID
	 *
	 * @param $id
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function find($id)
	{
		return $this->server->find($id);
	}
}
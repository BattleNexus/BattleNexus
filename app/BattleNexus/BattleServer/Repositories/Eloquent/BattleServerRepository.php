<?php namespace BattleNexus\BattleServer\Repositories\Eloquent;

use BattleNexus\BattleServer\Models\Eloquent\BattleServer;
use Cartalyst\Sentry\Sentry;

class BattleServerRepository implements \BattleNexus\BattleServer\Repositories\BattleServerRepositoryInterface
{
	protected $server;
	protected $sentry;

	public function __construct(BattleServer $server, Sentry $user)
	{
		$this->server = $server;
		$this->sentry = $user;
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
	 * Returns all servers that a user owns
	 *
	 * @return \BattleNexus\BattleServer\Models\BattleServerInterface[]
	 */
	public function allUserOwns()
	{
		return $this->server->where('user_id', $this->sentry->getUser()->getId());
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
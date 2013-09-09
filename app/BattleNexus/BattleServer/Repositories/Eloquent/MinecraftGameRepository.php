<?php namespace BattleNexus\BattleServer\Models\Eloquent;

use BattleNexus\BattleServer\Repositories\MinecraftGameRepositoryInterface;

class MinecraftGameRepository implements MinecraftGameRepositoryInterface
{
	/**
	 * @var MinecraftGame
	 */
	public $game;

	public function __construct(MinecraftGame $game)
	{
		$this->game = $game;
	}

	/**
	 * Returns all servers
	 *
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface[]
	 */
	public function all()
	{
		return $this->game->all();
	}

	/**
	 * Creates a new BattleServer
	 *
	 * @param $attributes
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function create($attributes)
	{
		return $this->game->create($attributes);
	}

	/**
	 * Finds a server by its ID
	 *
	 * @param $id
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function find($id)
	{
		return $this->game->find($id);
	}

}
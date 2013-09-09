<?php namespace BattleNexus\BattleServer\Repositories;

interface MinecraftGameRepositoryInterface
{
	/**
	 * Returns all servers
	 *
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface[]
	 */
	public function all();

	/**
	 * Creates a new BattleServer
	 *
	 * @param $attributes
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function create($attributes);

	/**
	 * Finds a server by its ID
	 *
	 * @param $id
	 * @return \BattleNexus\BattleServer\Models\MinecraftGameInterface
	 */
	public function find($id);
}
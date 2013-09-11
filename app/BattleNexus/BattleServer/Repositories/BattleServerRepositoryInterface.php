<?php namespace BattleNexus\BattleServer\Repositories;

interface BattleServerRepositoryInterface
{
	/**
	 * Returns all servers
	 *
	 * @return \BattleNexus\BattleServer\Models\BattleServerInterface[]
	 */
	public function all();

	/**
	 * Returns all servers that a user owns
	 *
	 * @return \BattleNexus\BattleServer\Models\BattleServerInterface[]
	 */
	public function allUserOwns();

	/**
	 * Creates a new BattleServer
	 *
	 * @param $attributes
	 * @return \BattleNexus\BattleServer\Models\BattleServerInterface
	 */
	public function create($attributes);

	/**
	 * Finds a server by its ID
	 *
	 * @param $id
	 * @return \BattleNexus\BattleServer\Models\BattleServerInterface
	 */
	public function find($id);
}
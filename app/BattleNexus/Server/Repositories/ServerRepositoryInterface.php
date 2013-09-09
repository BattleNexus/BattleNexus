<?php namespace BattleNexus\Server\Repositories;

interface ServerRepositoryInterface
{
	/**
	 * Returns all servers
	 *
	 * @return \BattleNexus\Server\Models\ServerInterface[]
	 */
	public function all();

	/**
	 * Creates a new
	 *
	 * @param $attributes
	 * @return \BattleNexus\Server\Models\ServerInterface
	 */
	public function create($attributes);

	/**
	 * Finds a server by its ID
	 *
	 * @param $id
	 * @return \BattleNexus\Server\Models\ServerInterface
	 */
	public function find($id);

	/**
	 * Find a server by its name
	 *
	 * @param $name
	 * @return \BattleNexus\Server\Models\ServerInterface
	 */
	public function findByName($name);
}
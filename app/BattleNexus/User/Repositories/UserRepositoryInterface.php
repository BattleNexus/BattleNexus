<?php namespace BattleNexus\User\Repositories;

interface UserRepositoryInterface
{
	public function all();

	/**
	 * @param array $attributes
	 * @return \BattleNexus\User\Models\UserInterface
	 */
	public function create(array $attributes);

	/**
	 * @param $id
	 * @return \BattleNexus\User\Models\UserInterface
	 */
	public function find($id);

	/**
	 * @param $username
	 * @return \BattleNexus\User\Models\UserInterface
	 */
	public function findByUsername($username);

	/**
	 * @return \BattleNexus\User\Models\UserInterface
	 */
	public function emptyModel();

	/**
	 * Returns the currently logged in user
	 *
	 * @return mixed
	 */
	public function getUser();
}
<?php namespace BattleNexus\User\Repositories\Eloquent;

use BattleNexus\User\Models\Eloquent\User;
use BattleNexus\User\Repositories\UserRepositoryInterface;
use Cartalyst\Sentry\Sentry;

class UserRepository implements UserRepositoryInterface
{

	public function __construct(Sentry $user)
	{
		$this->user = $user;
	}

	/**
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function all()
	{
		return $this->user->findAllUsers();
	}

	/**
	 * @param array $attributes
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function create(array $attributes)
	{
		return $this->user->createUser($attributes);
	}

	/**
	 * @param int $id
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function find($id)
	{
		return $this->user->findUserById($id);
	}

	/**
	 * @param string $username
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function findByUsername($username)
	{
		return $this->user->findUserByLogin($username);
	}

	/**
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function emptyModel()
	{
		return $this->user->getEmptyUser();
	}

	/**
	 * @return \Cartalyst\Sentry\Users\Eloquent\User
	 */
	public function getUser()
	{
		return $this->user->getUser();
	}

}
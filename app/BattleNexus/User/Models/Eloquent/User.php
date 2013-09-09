<?php namespace BattleNexus\User\Models\Eloquent;

use BattleNexus\User\Models\UserInterface;

class User extends \BaseModel implements UserInterface
{
	/**
	 * Returns the users username
	 *
	 * @return mixed
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Sets the users username
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername($username)
	{
		$this->username = $username;
	}

	/**
	 * Returns the users email
	 *
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Sets the users email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * Returns the users minecraft username
	 *
	 * @return string
	 */
	public function getMinecraftUsername()
	{
		return $this->minecraft_username;
	}

	/**
	 * Sets the users minecraft username
	 *
	 * @param $username
	 * @return mixed
	 */
	public function setMinecraftUsername($username)
	{
		$this->minecraft_username = $username;
	}

	/**
	 * Returns the errors after validation has failed
	 *
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

}
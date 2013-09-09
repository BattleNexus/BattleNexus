<?php namespace BattleNexus\User\Models;

interface UserInterface extends \BaseModelInterface
{
	/**
	 * Returns the users username
	 *
	 * @return mixed
	 */
	public function getUsername();

	/**
	 * Sets the users username
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername($username);

	/**
	 * Returns the users email
	 *
	 * @return mixed
	 */
	public function getEmail();

	/**
	 * Sets the users email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email);

	/**
	 * Returns the users minecraft username
	 *
	 * @return string
	 */
	public function getMinecraftUsername();

	/**
	 * Sets the users minecraft username
	 *
	 * @param $username
	 * @return mixed
	 */
	public function setMinecraftUsername($username);
}
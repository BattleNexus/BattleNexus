<?php namespace BattleNexus\BattleServer\Models;

use Cartalyst\Sentry\Users\UserInterface;

interface BattleServerInterface
{
	/**
	 * Returns the server id
	 *
	 * @return mixed
	 */
	public function getId();

	/**
	 * Returns the owner of the server
	 *
	 * @return UserInterface
	 */
	public function getOwner();

	/**
	 * Sets the owner of the server
	 *
	 * @param UserInterface $user
	 * @return mixed
	 */
	public function setOwner(UserInterface $user);

	/**
	 * Starts the server
	 *
	 * @return bool - True if started | False if an error occurred
	 */
	public function startServer();

	/**
	 * Stops the server
	 *
	 * @return bool - True if stopped | False if an error occurred
	 */
	public function stopServer();

	/**
	 * Adds to the time allotted to the server
	 *
	 * @param int $time Minute(s) to add
	 * @return void
	 */
	public function extendTime($time);

	/**
	 * Removes time allotted to the server
	 *
	 * @param int $time Minute(s) to remove
	 * @return void
	 */
	public function removeTime($time);

	/**
	 * Returns the IP of the server	 *
	 *
	 * Note: Returns null if the server is offline
	 *
	 * TODO: Refactor this so we use server slots instead
	 *
	 * @return string|null
	 */
	public function getIp();

	/**
	 * Sets the IP to be used by the server
	 *
	 * TODO: Refactor this so we use server slots instead
	 *
	 * @param $ip
	 * @return void
	 */
	public function setIp($ip);

	/**
	 * Returns the port the server is running on
	 *
	 * Note: Returns null if the server is offline
	 *
	 * @return string|null
	 */
	public function getPort();

	/**
	 * Sets the port to be used by the server
	 *
	 * @param int $port
	 * @return mixed
	 */
	public function setPort($port);

	/**
	 * Gets the maximum amount of players allowed on the server
	 *
	 * @return mixed
	 */
	public function getMaxPlayers();

	/**
	 * Sets the maximum amount of players allowed on the server
	 *
	 * @param int $maxPlayers
	 * @return mixed
	 */
	public function setMaxPlayers($maxPlayers);

	/**
	 * Returns the game being used by the server
	 *
	 * @return MinecraftGameInterface
	 */
	public function getGame();

	/**
	 * Sets the being used by the server
	 *
	 * @param MinecraftGameInterface $game
	 * @return mixed
	 */
	public function setGame(MinecraftGameInterface $game);

	/**
	 * Returns an array of information sent back from the server
	 *
	 * @return array
	 */
	public function getMeta();

	/**
	 * Sets sever meta information
	 *
	 * @param string $meta
	 * @return void
	 */
	public function setMeta($meta);
}
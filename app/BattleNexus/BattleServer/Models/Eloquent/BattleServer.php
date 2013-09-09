<?php namespace BattleNexus\BattleServer\Models\Eloquent;

use BattleNexus\BattleServer\Models\BattleServerInterface;
use BattleNexus\BattleServer\Models\MinecraftGameInterface;
use Cartalyst\Sentry\Users\UserInterface;

class BattleServer extends \BaseModel implements BattleServerInterface
{
	/**
	 * Returns the server id
	 *
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the owner of the server
	 *
	 * @return UserInterface
	 */
	public function getOwner()
	{
		return $this->belongsTo('User', 'owner_id');
	}

	/**
	 * Sets the owner of the server
	 *
	 * @param UserInterface $user
	 * @return mixed
	 */
	public function setOwner(UserInterface $user)
	{
		$this->owner_id = $user->getId();
	}

	/**
	 * Starts the server
	 *
	 * @return bool - True if started | False if an error occurred
	 */
	public function startServer()
	{
		// TODO: Implement startServer() method.
	}

	/**
	 * Stops the server
	 *
	 * @return bool - True if stopped | False if an error occurred
	 */
	public function stopServer()
	{
		// TODO: Implement stopServer() method.
	}

	/**
	 * Sets the time allotted to the server
	 *
	 * @param int $time Minute(s)
	 * @return void
	 */
	public function setTime($time)
	{
		$this->time = $time;
	}

	/**
	 * Adds to the time allotted to the server
	 *
	 * @param int $time Minute(s) to add
	 * @return void
	 */
	public function extendTime($time)
	{
		$this->time += $time;
	}

	/**
	 * Removes time allotted to the server
	 *
	 * @param int $time Minute(s) to remove
	 * @return void
	 */
	public function removeTime($time)
	{
		$this->time -= $time;
	}

	/**
	 * Returns the IP of the server
	 *
	 * Note: Returns null if the server is offline
	 *
	 * TODO: Refactor this so we use server slots instead
	 *
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}

	/**
	 * Sets the IP to be used by the server
	 *
	 * TODO: Refactor this so we use server slots instead
	 *
	 * @param $ip
	 * @return void
	 */
	public function setIp($ip)
	{
		$this->ip = $ip;
	}

	/**
	 * Returns the port the server is running on
	 *
	 * Note: Returns null if the server is offline
	 *
	 * @return string|null
	 */
	public function getPort()
	{
		return $this->port;
	}

	/**
	 * Sets the port to be used by the server
	 *
	 * @param int $port
	 * @return mixed
	 */
	public function setPort($port)
	{
		$this->port = $port;
	}

	/**
	 * Gets the maximum amount of players allowed on the server
	 *
	 * @return mixed
	 */
	public function getMaxPlayers()
	{
		return $this->max_players;
	}

	/**
	 * Sets the maximum amount of players allowed on the server
	 *
	 * @param int $maxPlayers
	 * @return mixed
	 */
	public function setMaxPlayers($maxPlayers)
	{
		$this->max_players;
	}

	/**
	 * Returns the game being used by the server
	 *
	 * @return MinecraftGameInterface
	 */
	public function getGame()
	{
		return $this->belongsTo('MinecraftGame', 'game_id');
	}

	/**
	 * Sets the being used by the server
	 *
	 * @param MinecraftGameInterface $game
	 * @return mixed
	 */
	public function setGame(MinecraftGameInterface $game)
	{
		$this->game_id = $game->getId();
	}

	/**
	 * Returns an array of information sent back from the server
	 *
	 * @return array
	 */
	public function getMeta()
	{
		return $this->meta ? json_decode($this->meta, 1) : null;
	}

	/**
	 * Sets sever meta information
	 *
	 * @param string $meta
	 * @return void
	 */
	public function setMeta($meta)
	{
		$this->meta = $meta;
	}

}
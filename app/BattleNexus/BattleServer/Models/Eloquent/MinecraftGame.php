<?php namespace BattleNexus\BattleServer\Models\Eloquent;

use Cartalyst\Sentry\Users\UserInterface;

class MinecraftGame extends \BaseModel implements \BattleNexus\BattleServer\Models\MinecraftGameInterface
{
	/**
	 * Returns the map name
	 *
	 * @return string
	 */
	public function getMapName()
	{
		return $this->map_name;
	}

	/**
	 * Sets the map name
	 *
	 * @param string $mapName
	 * @return string
	 */
	public function setMapName($mapName)
	{
		$this->map_name = $mapName;
	}

	/**
	 * Returns the minecraft gamemode
	 *
	 * @return int
	 */
	public function getGameMode()
	{
		return $this->gamemode;
	}

	/**
	 * Sets the gamemode to be used by the map
	 *
	 * @param int $gameMode
	 * @return mixed
	 */
	public function setGameMode($gameMode)
	{
		$this->gamemode = $gameMode;
	}

	/**
	 * Returns the location to the game/map's path
	 *
	 * @return string
	 */
	public function getMapLocation()
	{
		return $this->location;
	}

	/**
	 * Sets the location to the game/map's path
	 *
	 * @param string $location
	 * @return string
	 */
	public function setMapLocation($location)
	{
		$this->location = $location;
	}

	/**
	 * Returns the creator of the map
	 *
	 * @return UserInterface
	 */
	public function getCreator()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Sets the creator of the map
	 *
	 * @param UserInterface $user
	 * @return mixed
	 */
	public function setCreator(UserInterface $user)
	{
		$this->user_id = $user->getId();
	}

	/**
	 * Returns the map id
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
}
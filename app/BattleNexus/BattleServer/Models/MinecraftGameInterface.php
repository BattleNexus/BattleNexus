<?php namespace BattleNexus\BattleServer\Models;

use Cartalyst\Sentry\Users\UserInterface;

interface MinecraftGameInterface
{
	/**
	 * Returns the map id
	 *
	 * @return int
	 */
	public function getId();

	/**
	 * Returns the map name
	 *
	 * @return string
	 */
	public function getMapName();

	/**
	 * Sets the map name
	 *
	 * @param string $mapName
	 * @return string
	 */
	public function setMapName($mapName);

	/**
	 * Returns the minecraft gamemode
	 *
	 * @return int
	 */
	public function getGameMode();

	/**
	 * Sets the gamemode to be used by the map
	 *
	 * @param int $gameMode
	 * @return mixed
	 */
	public function setGameMode($gameMode);

	/**
	 * Returns the location to the game/map's path
	 *
	 * @return string
	 */
	public function getMapLocation();

	/**
	 * Sets the location to the game/map's path
	 *
	 * @param string $location
	 * @return string
	 */
	public function setMapLocation($location);

	/**
	 * Returns the creator of the map
	 *
	 * @return UserInterface
	 */
	public function getCreator();

	/**
	 * Sets the creator of the map
	 *
	 * @param UserInterface $user
	 * @return mixed
	 */
	public function setCreator(UserInterface $user);
}
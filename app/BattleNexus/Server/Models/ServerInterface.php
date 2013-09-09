<?php namespace BattleNexus\Server\Models;

interface ServerInterface
{
	public function getId();

	public function getName();

	public function getSlug();

	public function getImageUrl();

	public function getThumbUrl();

	public function getDescription();

	public function getBlurb();

	public function getActivePlayers();

	public function getMaxPlayers();

	public function getIpAddress();

	public function getPort();
}
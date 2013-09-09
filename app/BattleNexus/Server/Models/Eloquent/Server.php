<?php namespace BattleNexus\Server\Models\Eloquent;

use BattleNexus\Server\Models\ServerInterface;

class Server extends \Eloquent implements ServerInterface
{
	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSlug()
	{
		return $this->slug;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getBlurb()
	{
		return $this->blurb;
	}

	public function getActivePlayers()
	{
		return $this->active_playes;
	}

	public function getMaxPlayers()
	{
		return $this->max_players;
	}

	public function getIpAddress()
	{
		return $this->ip;
	}

	public function getPort()
	{
		return $this->port;
	}

	public function getImageUrl()
	{
		return $this->image_url;
	}

	public function getThumbUrl()
	{
		return $this->thumb_url;
	}
}
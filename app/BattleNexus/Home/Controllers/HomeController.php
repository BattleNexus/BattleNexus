<?php namespace BattleNexus\Home\Controllers;

class HomeController extends \BaseController
{
	public function home()
	{
		$servers = [];
		$server_cache = \Cache::get('servers');

		$i = 0;
		foreach ($server_cache as $server) {
			$servers[$i][] = $server;
			if ($i = 2) {
				$i = 0;
			}
		}

		$this->layout->content = \View::make('home.index')->with('servers', $servers);
	}
}
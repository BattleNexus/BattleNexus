<?php

class ServerSeeder extends Seeder
{
	protected $server;

	public function __construct(\BattleNexus\Server\Repositories\ServerRepositoryInterface $server)
	{
		$this->server = $server;
	}

	public function run()
	{
		\BattleNexus\Server\Models\Eloquent\Server::truncate();
		/* Insert LavaSurvival */
		$this->server->create([
			'name' => 'LavaSurvival',
			'slug' => 'lavasurvival',
			'image_url' => '/img/servers/server-2.jpg',
			'blurb' => 'Exhilarating gamemode of pure, intense survival. Can you survive?',
			'description' => 'Can you survive the Lava?',
			'ip' => '127.0.0.1',
			'port' => '25566'
		]);
		/* Insert Paintball */
		$this->server->create([
			'name' => 'Paintball',
			'slug' => 'paintball',
			'image_url' => '/img/servers/server-3.jpg',
			'blurb' => 'Fast paced game based around head-on team vs. team warfare.',
			'description' => 'Some good ol\'\' fashion paintball.',
			'ip' => '127.0.0.1',
			'port' => '25567'
		]);
		/* Insert Community SMP */
		$this->server->create([
			'name' => 'Community SMP',
			'slug' => 'community-smp',
			'image_url' => '/img/servers/server-1.jpg',
			'blurb' => 'Fun, community run server with many activities and endless adventure.',
			'description' => 'BattleNexus Community SMP is a fun server where you can adventure outwards, or just settle down, create a faction, and make friends! Regardless of the path you choose, the community will always be there to help you. In this server, you enjoy the struggles of surviving the night, mining in the dark, living with friends, or creating majestic redstone contraptions! As long as you are creative, you never run out of things to do here!\r\n\r\nThis server has many features, including but not limited to:\r\n\r\n - Being community run \r\n - Factions\r\n - Community Contests\r\n - Friendly Players and Staff\r\n - User-Friendly Shop and Economic System',
			'ip' => '127.0.0.1',
			'port' => '25565'
		]);
	}
}
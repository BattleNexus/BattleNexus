<?php

class DefaultGroupsSeeder extends Seeder
{
	public function run()
	{
		Sentry::createGroup([
			'name' => 'Super Admin',
			'permissions' => [
				'superuser' => 1,
				'admin' => 1,
				'moderator' => 1,
			]
		]);

		Sentry::createGroup([
			'name' => 'Admin',
			'permissions' => [
				'admin' => 1,
				'moderator' => 1,
			]
		]);

		Sentry::createGroup([
			'name' => 'Moderator',
			'permissions' => [
				'moderator' => 1,
			]
		]);

		Sentry::createGroup([
			'name' => 'Member',
		]);
	}
}
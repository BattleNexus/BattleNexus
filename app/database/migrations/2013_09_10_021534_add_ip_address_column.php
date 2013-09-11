<?php

use Illuminate\Database\Migrations\Migration;

class AddIpAddressColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(\Illuminate\Database\Schema\Blueprint $table)
		{
			$table->string('ip_address')->after('password');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(\Illuminate\Database\Schema\Blueprint $table)
		{
			$table->dropColumn('password');
		});
	}

}
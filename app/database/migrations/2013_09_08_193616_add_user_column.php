<?php

use Illuminate\Database\Migrations\Migration;

class AddUserColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(\Illuminate\Database\Schema\Blueprint $table)
		{
			$table->string('username')->after('id');
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
			$table->dropColumn('username');
		});
	}

}
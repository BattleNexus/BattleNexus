<?php

use Illuminate\Database\Migrations\Migration;

class CreateServerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servers', function(\Illuminate\Database\Schema\Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->text('description');
			$table->string('blurb');
			$table->string('image_url');
			$table->string('ip');
			$table->integer('port')->unsigned();
			$table->integer('active_players')->unsigned()->default(0);
			$table->integer('max_players')->unsigned()->default(0);

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servers');
	}

}
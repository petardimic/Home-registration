<?php

use Illuminate\Database\Migrations\Migration;

class CreatePetitionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petition', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('type');
			$table->string('home');
			$table->string('textPetition');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('petition');
	}

}

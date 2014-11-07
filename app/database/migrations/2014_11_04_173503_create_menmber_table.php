<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenmberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member', function($table)
		{
			$table->increments('id');
			$table->string('orderNo');
			$table->string('name');
			$table->string('nationality');
			$table->string('gender');
			$table->string('idNumber');
			$table->string('status');
			$table->string('birthDate');
			$table->string('fatherData');
			$table->string('motherData');
			$table->string('comeFrom');
			$table->string('goTo');
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
		Schema::drop('member');
	}

}

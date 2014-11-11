<?php

use Illuminate\Database\Migrations\Migration;

class HomeMember extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_member', function($table)
		{
			$table->increments('id');
			$table->string('home_id');
			$table->string('member_id');
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
		Schema::drop('home_member');
	}

}

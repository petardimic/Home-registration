<?php

use Illuminate\Database\Migrations\Migration;

class CreateHomeregisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('homeregis', function($table)
		{
			$table->increments('id');
			$table->string('bookNo');
			$table->string('homeCode');
			$table->string('regOffice');
			$table->string('address');
			$table->string('villageName');
			$table->string('homeName');
			$table->string('homeType');
			$table->string('buildingType');
			$table->string('dateAssignAddr'); 
			$table->string('registrar');
			$table->string('typingDate');
			$table->string('currentAddr');
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
		Schema::drop('homeregis');
	}

}

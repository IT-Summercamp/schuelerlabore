<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVorstandssitzungen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vorstandssitzungen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('datum');
			$table->string('zeit');
			$table->string('ort');
			$table->string('tagesordnung');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vorstandssitzungen');
	}

}

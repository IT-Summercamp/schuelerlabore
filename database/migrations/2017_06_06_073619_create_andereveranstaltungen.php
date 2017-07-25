<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndereveranstaltungen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('andereveranstaltungen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('datum');
			$table->string('zeit');
			$table->string('ort');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('andereveranstaltungen');
	}

}

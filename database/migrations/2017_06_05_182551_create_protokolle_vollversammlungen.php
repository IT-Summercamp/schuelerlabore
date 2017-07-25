<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtokolleVollversammlungen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('protokolle_vollversammlungen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('schuljahr');
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
		Schema::drop('protokolle_vollversammlungen');
	}

}

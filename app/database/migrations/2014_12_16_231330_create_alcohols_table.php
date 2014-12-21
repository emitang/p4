<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlcoholsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alcohols', function($table)
		{
			$table->increments('id');

			$table->timestamps();

			$table->string('name');
			$table->string('picture');
			$table->text('appearance');
			$table->text('description');
			$table->text('taste');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alcohols');
	}

}

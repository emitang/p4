<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlcocktailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plcocktails', function($table)
		{
			$table->increments('id');

			$table->timestamps();

			$table->string('name');
			$table->string('picture');
			$table->text('IBAcat');
			$table->text('primary');
			$table->text('ingredients');
			$table->text('glass');
			$table->text('info');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plcocktails');
	}

}

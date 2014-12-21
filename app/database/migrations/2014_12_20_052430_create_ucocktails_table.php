<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUcocktailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ucocktails', function($table)
		{
			$table->increments('id');

			$table->timestamps();

			$table->string('name');
			$table->text('author');
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
		Schema::drop('ucocktails');
	}

}

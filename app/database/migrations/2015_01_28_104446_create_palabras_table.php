<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalabrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('palabras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('palabra');
			$table->string('silabas');
			$table->string('imagen');
			$table->enum('sorp', ['singular', 'plural']);

			$table->enum('type', ['silabas', 'figura', 'sorp', 'camino', 'palabra']);

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
		Schema::drop('palabras');
	}

}

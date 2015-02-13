<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('label');
			$table->integer('owner');
			$table->boolean('status');
			$table->dateTime('published_at');
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
		//
		Schema::drop('nodes');
	}

}

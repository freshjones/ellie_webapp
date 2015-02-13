<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('field_instances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('field_id');
			$table->string('entity');
			$table->string('type');
			$table->string('field_name');
			$table->string('label');
			$table->longText('config');
			$table->boolean('show_label');
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
		Schema::drop('field_instances');
	}

}

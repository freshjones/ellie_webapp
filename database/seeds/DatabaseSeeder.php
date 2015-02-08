<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('VariablesTableSeeder');
	}

}

class VariablesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('variables')->delete();

		$variables = array();
		$variables[] = ['name' => 'site_name', 'value' => getenv('SITE_NAME'),];
		$variables[] = ['name' => 'site_color', 'value' => getenv('SITE_COLOR'),];
		$variables[] = ['name' => 'site_template', 'value' => getenv('SITE_TEMPLATE'),];

		DB::table('variables')->insert($variables);

	}

}

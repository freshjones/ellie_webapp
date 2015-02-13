<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use app\Variables;

class DefaultsSeeder extends Seeder {

	protected $defaults;

	public function __construct()
	{
		//load in the default data
		$this->loadDefaultData();
	}

	protected function loadDefaultData()
	{
		$defaults = Storage::get('SeedData/defaults');
		$this->defaults = json_decode($defaults);
	}

	public function run()
	{
		Model::unguard();
		$this->call('VariablesSeeder');
	}

}

class VariablesSeeder extends DefaultsSeeder {

	public function run()
	{
		$data = $this->defaults;
		$vars = $data->variables;

		DB::table('variables')->delete();

		$variables = array();
		foreach($vars AS $k => $v)
		{
			$variables[] = ['name' => $k, 'value' => $v];
		}

		DB::table('variables')->insert($variables);

	}

}

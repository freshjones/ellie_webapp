<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Variables extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'variables';

	protected $fillable = ['name','value'];

	protected function getVar($name)
	{
		$variable = $this::where('name', '=', $name)->pluck('value');
		return $variable;
	}

}
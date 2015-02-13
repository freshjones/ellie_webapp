<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Variables extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'variables';

	protected $timestamps = true;

	protected $fillable = ['name','value'];

	protected function getVar($name)
	{
		$variable = $this::where('name', '=', $name)->pluck('value');
		return $variable;
	}

	protected function getAllVars()
	{
		$siteVars = Cache::rememberForever('siteVars', function()
		{
			$vars = Variables::all(['name','value']);

			$siteVars = [];

			foreach($vars as $item)
			{
				$siteVars[$item->name] = $item->value;
			}

			return $siteVars;
		});

		return $siteVars;

	}

}
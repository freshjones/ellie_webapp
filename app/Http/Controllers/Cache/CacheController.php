<?php namespace App\Http\Controllers\Cache;

use App\Commands\ClearCacheCommand;
use App\Http\Controllers\Controller;

class CacheController extends Controller {

	private $cache;

	public function __construct($cache='all')
	{
		$this->cache = $cache;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function clear()
	{
		$this->dispatch( new ClearCacheCommand($this->cache) );
		return redirect('/');
	}

}

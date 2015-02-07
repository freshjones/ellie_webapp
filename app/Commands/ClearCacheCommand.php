<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Cache;

class ClearCacheCommand extends Command implements SelfHandling {

	private $key;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($cache='all')
	{
		$this->key = $cache;
	}

	protected function cacheClearAll()
	{
		return Cache::flush();
	}

	protected function cacheClear()
	{
		if ( Cache::has( $this->key ) )
		{
			Cache::forget( $this->key );
		}
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{

		if($this->key === 'all')
		{
			$this->cacheClearAll();
		} else {
			$this->cacheClear();
		}

	}

}

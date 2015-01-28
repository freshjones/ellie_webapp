<?php namespace App\Commands;

use App\Commands\Command;
use App\Variables;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Database\DatabaseManager as DB;

class SiteInitialization extends Command implements SelfHandling, ShouldBeQueued {

	public $siteName;
	public $siteTemplate;
	public $siteColor;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($sitename, $sitetemplate, $sitecolor)
	{
		//
		$this->siteColor = $sitecolor;
		$this->siteName = $sitename;
		$this->siteTemplate = $sitetemplate;

		//reset default variables
		$this->resetVariables();

	}

	private function resetVariables()
	{
		$delete = Variables::where('name', 'LIKE', 'site_%')->delete();
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{

		$siteName = Variables::create(['name'=>'site_name', 'value' => $this->siteName ]);
		$siteColor = Variables::create(['name'=>'site_color', 'value' => $this->siteColor ]);
		$siteTemplate = Variables::create(['name'=>'site_template', 'value' => $this->siteTemplate ]);

	}

}

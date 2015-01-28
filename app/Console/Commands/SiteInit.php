<?php namespace App\Console\Commands;

use App\Commands\SiteInitialization;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Contracts\Bus\Dispatcher;

class SiteInit extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'site:initialize';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Initialize the site with default values';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire(Dispatcher $bus)
	{
		//
		$bus->dispatch( new SiteInitialization(

			$this->argument('sitename'),
			$this->argument('sitetemplate'),
			$this->argument('sitecolor')

		) );

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['sitename', InputArgument::REQUIRED, 'the name of the site.'],
			['sitecolor', InputArgument::REQUIRED, 'the color id of the site.'],
			['sitetemplate', InputArgument::REQUIRED, 'the initial template of the site'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['seed', null, InputOption::VALUE_OPTIONAL, 'Seed the site with dummy content', null],
		];
	}

}

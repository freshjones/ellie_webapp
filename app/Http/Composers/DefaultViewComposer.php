<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Variables;

class DefaultViewComposer {

	/**
	 * The user repository implementation.
	 *
	 * @var UserRepository
	 */
	protected $siteVars;

	/**
	 * Create a new profile composer.
	 *
	 * @param  UserRepository  $users
	 * @return void
	 */
	public function __construct()
	{
		$this->siteVars = Variables::getAllVars();
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		foreach($this->siteVars AS $key => $val)
		{
			$view->with($key, $val);
		}
	}

}
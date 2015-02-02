<?php namespace App\Http\Controllers;

use App\Variables;

use App\Commands\SiteInitialization;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data = [];
		$data['version'] = '0.0.3'; //Config::get('settings.version');
		$data['site_name'] = Variables::getVar('site_name');
		$data['site_color'] = Variables::getVar('site_color');
		$data['site_template'] = Variables::getVar('site_template');
		return view('welcome', $data );
	}

}

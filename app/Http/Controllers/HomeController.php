<?php namespace App\Http\Controllers;

use Caffeinated\Themes\Facades\Theme;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [];
		$data['version'] = '0.0.0.1';
		$data['title'] = 'A homepage Title';
		$data['content'] = 'Here is my fake content';
		return Theme::view('pages.home', $data);
	}

}

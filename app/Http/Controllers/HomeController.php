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

		$editmode = true;

		$data['edit_mode'] = $editmode;

		$classes = array();
		if($editmode) { $classes[] = 'edit-mode'; }

		$data['classes'] = implode(' ', $classes);

		$data['version'] = '0.0.0.1';
		$data['title'] = 'A homepage Title';
		$data['content'] = 'Here is my fake content';

		$data['header_top'] = null;
		$data['header'] = null;
		$data['preface_top'] = null;
		$data['preface_bottom'] = null;

		$data['content_top'] = null;
		$data['content'] = null;
		$data['content_bottom'] = null;

		$data['sidebar_first'] = null;
		$data['sidebar_second'] = null;

		$data['footer_top'] = null;
		$data['footer'] = null;
		$data['footer_bottom'] = null;

		return Theme::view('pages.master', $data);
	}

}

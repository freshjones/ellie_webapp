<?php namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
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
	protected $editmode;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->editmode = true;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [];

		$data['edit_mode'] = $this->editmode;

		$classes = array();
		if($this->editmode) { $classes[] = 'edit-mode'; }

		$data['classes'] = implode(' ', $classes);

		$data['version'] = '0.0.0.1';
		$data['title'] = 'A homepage Title';
		$data['content'] = 'Here is my fake content';

		$data['header_top'] = null;
		$data['header'] = $this->dummyModules(3);
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

	protected function dummyModules($repeats=1)
	{
		$content = '';

		for($i=0; $i<$repeats; $i++)
		{
			$content .= '<div class="block">';

			if($this->editmode)
			{
				$content .= '<div class="block-edit active">';
						$content .= '<ul class="tools">';
		                $content .= '<li class="fa fa-arrows move"></li>';
						$content .= '<li class="fa fa-wrench edit"></li>';
				$content .= '</div>';
			}

			$content .= $this->loremParagraph();
			$content .= '</div>';
		}

		return $content;

	}

	protected function loremParagraph()
	{
		$content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys';
		$content .= 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys';
		$content .= 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys';

		return $content;
	}

}

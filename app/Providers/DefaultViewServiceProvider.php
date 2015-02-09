<?php namespace App\Providers;

use Caffeinated\Themes\Facades\Theme;
use View;
use Illuminate\Support\ServiceProvider;

class DefaultViewServiceProvider extends ServiceProvider {

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function boot()
	{
		$layout = $this->getLayout('master');
		View::composer($layout, 'App\Http\Composers\DefaultViewComposer');
	}

	public function register()
	{
	}

	private function getLayout($layout)
	{
		$theme = Theme::getActive();
		$themedLayout = $theme . '::' . $layout;
		if( View::exists($themedLayout) )
		{
			return $themedLayout;
		} else {
			return $layout;
		}
	}

}
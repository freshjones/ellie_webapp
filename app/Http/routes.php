<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['namespace' => 'Pages' ], function()
{
	Route::get('/', 'HomeController@index');
});

Route::group(['prefix' => 'cache', 'namespace' => 'Cache' ], function()
{
	Route::get('clear/{cache?}', ['as' => 'cache/clear', 'uses' => 'CacheController@clear']);
});

Route::group(['prefix' => 'api/v1'], function()
{
	Route::get('siteconfig', ['as' => 'api.v1.variables', 'uses' => 'SiteconfigController@index']);
	Route::post('siteconfig', ['as' => 'api.v1.variables.store', 'uses' => 'SiteconfigController@store']);
});


Route::group(['prefix' => 'builder', 'namespace' => 'Builder' ], function()
{
	Route::resource('node', 'Node\NodeController');
});
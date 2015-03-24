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

Route::get('/', ['as' => 'home', 'uses' => 'TuspasosStaticPagesController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'TuspasosStaticPagesController@about']);
Route::get('what_is_reflexology', ['as' => 'whatis', 'uses' => 'TuspasosStaticPagesController@whatIs']);
Route::get('session', ['as' => 'session', 'uses' => 'TuspasosStaticPagesController@session']);
Route::get('lymph_drainage', ['as' => 'lymph_drainage', 'uses' => 'TuspasosStaticPagesController@lymph']);
Route::get('facial', ['as' => 'facial', 'uses' => 'TuspasosStaticPagesController@facial']);
Route::get('hand', ['as' => 'hand', 'uses' => 'TuspasosStaticPagesController@hand']);
Route::get('testimonials', ['as' => 'testimonials', 'uses' => 'TuspasosStaticPagesController@testimonials']);
Route::get('prices', ['as' => 'prices', 'uses' => 'TuspasosStaticPagesController@prices']);
Route::get('contact', ['as' => 'contact', 'uses' => 'TuspasosStaticPagesController@contact']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

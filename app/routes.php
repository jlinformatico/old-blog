<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Main routes */

Route::get('/', function()
{
	return time();
});

/* Blog routes */

Route::get('blog', array('as' => 'blog', 'uses' => 'BlogController@get_index'));

/* Users routes */

Route::get('users', array('as' => 'users', 'uses' => 'UsersController@index'));
Route::get('users/show/{id}', array('as' => 'users_show', 'uses' => 'UsersController@show'));
Route::get('users/create', array('as' => 'users_create', 'uses' => 'UsersController@create'));
Route::post('users/store', array('uses' => 'UsersController@store'));
Route::delete('users/destroy/{id}', array('uses' => 'UsersController@destroy'));
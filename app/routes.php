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

Route::get('users', array('as' => 'users', 'uses' => 'UsersController@get_index'));
Route::get('user/{id}', array('as' => 'user', 'uses' => 'UsersController@get_user'));
Route::get('users/new', array('as' => 'new_user', 'uses' => 'UsersController@get_new'));
Route::post('users/create', array('uses' => 'UsersController@post_create'));
Route::delete('user/delete', array('uses' => 'UsersController@delete_user'));
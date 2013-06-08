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

Route::get('/', array('as' => 'main', function() {
    return 'Strona glowna';
}));

Route::get('dashboard', array('as' => 'dashboard', function() {
    return View::make('dashboard/main/index')
                ->with('title', 'Main dashboard');
}))->before('auth');

/*------------ Dashboard -------------- */

/* Login / Logout */

Route::get('login', array(
    'as' => 'login',
    'uses' => 'LoginController@index'
))->before('guest');

Route::post('login', array(
    'uses' => 'LoginController@login'
));

Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'LoginController@logout'
))->before('auth');

/* Users routes */

Route::get('users', array(
    'as' => 'users',
    'uses' => 'UsersController@index'
))->before('auth');

Route::get('users/show/{id}', array(
    'as' => 'users_show',
    'uses' => 'UsersController@show'
))->before('auth');

Route::get('users/create', array(
    'as' => 'users_create',
    'uses' => 'UsersController@create'
))->before('auth');

Route::post('users/store', array(
    'uses' => 'UsersController@store'
))->before('auth');

Route::delete('users/destroy/{id}', array(
    'uses' => 'UsersController@destroy'
))->before('auth');
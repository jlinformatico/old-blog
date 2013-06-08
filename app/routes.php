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

Route::get('login', array('as' => 'login', function() {
    return View::make('dashboard/login/login')
                ->with('title', 'Dashboard login');
}))->before('guest');

Route::post('login', function () {
    $user = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );


    if (Auth::attempt($user, true)) {
        return Redirect::route('dashboard')
                        ->with('message', 'You are successfully logged in.');
    } else {
        return Redirect::route('login')
            ->with('message', 'Your username/password combination was incorrect.');
    }


});

Route::get('logout', array('as' => 'logout', function() {
    Auth::logout();
    return Redirect::route('login')
        ->with('message', 'You are successfully logged out.');
}))->before('auth');

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
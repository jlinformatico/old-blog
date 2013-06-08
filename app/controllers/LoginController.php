<?php

class LoginController extends \BaseController {

    public function index()
    {
        return View::make('dashboard/login/login')
                    ->with('title', 'Dashboard login');
    }

    public function login()
    {
        if (Auth::attempt(array(
                            'username' => Input::get('username'),
                            'password' => Input::get('password')
            )))
        {
            return Redirect::route('dashboard')
                            ->with('message', 'You are successfully logged in.');
        }

        return Redirect::route('login')
            ->with('message', 'Your username/password combination was incorrect.');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login')
                        ->with('message', 'You are successfully logged out.');
    }

}
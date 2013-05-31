<?php

class UsersController extends BaseController {

    public function get_index() {
        return View::make('web/users/list')
                    ->with('title', 'Lista użytkowników')
                    ->with('users', Users::all());
    }

    public function get_user($id) {
        return View::make('web/users/show')
                    ->with('title', 'Dane użytkownika')
                    ->with('user', Users::findOrFail($id));
    }

    public function get_new() {
        return View::make('web/users/new')
                    ->with('title', 'Dodaj użytkownika');
    }

    public function post_create() {
        $validation = Users::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to('users/new')
                            ->withErrors($validation);
        } else {
            Users::insert(array(
                'name' => Input::get('nazwa'),
                'email' => Input::get('email'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));

            return Redirect::to('users')
                            ->with('message', '<b>Brawo!</b> Dodałeś nowy rekord!');
        }
    }

    public function delete_user() {
        Users::find(Input::get('id'))->delete();

        return Redirect::to('users')
                        ->with('message', '<b>Brawo!</b> Usunąłeś rekord!');
    }
}
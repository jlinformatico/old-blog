<?php

class UsersController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('dashboard/categories/users/list')
                    ->with('title', 'Users list')
                    ->with('users', Users::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('dashboard/categories/users/new')
                    ->with('title', 'Dodaj użytkownika');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validation = Users::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to('users/create')
                            ->withErrors($validation);
        } else {
            Users::insert(array(
                'username' => Input::get('username'),
                'email' => Input::get('email'),
                'password' => Hash::make(Input::get('password')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));

            return Redirect::to('users')
                            ->with('message', '<b>Brawo!</b> Dodałeś nowy rekord!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('dashboard/categories/users/show')
                    ->with('title', 'Dane użytkownika')
                    ->with('user', Users::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Users::find($id)->delete();

        return Redirect::to('users')
                        ->with('message', '<b>Brawo!</b> Usunąłeś rekord!');
    }

}
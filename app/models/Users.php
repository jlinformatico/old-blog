<?php

class Users extends Eloquent {

    public $table = 'users';

    public static $rules = array(
        'name' => 'required|min:4',
        'email' => 'required|unique:users|email',
        'password' => 'required|alphanum|between:4,8|confirmed',
        'password_confirmation' => 'required|alphanum|between:4,8'
    );

    public static function validate($data) {
        return Validator::make($data, static::$rules);
    }

}
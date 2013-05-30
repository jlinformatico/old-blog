<?php

class Users extends Eloquent {

    public $table = 'users';

    public static $rules = array(
        'name' => 'required|min:4',
        'email' => 'required|unique:users|email'
    );

    public static function validate($data) {
        return Validator::make($data, static::$rules);
    }

}
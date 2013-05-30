@extends('web.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <h3>Dane użytkownika</h3>

        Imię: {{ $users->name }}
        <br />
        E-mail: {{ $users->email }}

    </div>
@stop
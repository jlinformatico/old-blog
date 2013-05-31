@extends('web.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <div class="span12">

            <h3>Dane użytkownika</h3>
            Imię: {{ $user->name }}
            <br />
            E-mail: {{ $user->email }}
            <br /><br />

            {{ Form::open(array('url' => 'user/delete', 'method' => 'delete')) }}
            {{ Form::hidden('id', $user->id) }}
            {{ Form::submit('Usuń') }}
            {{ Form::close() }}

        </div>

    </div>
@stop
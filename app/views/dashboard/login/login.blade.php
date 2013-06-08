@extends('dashboard.layouts.master')

@section('sidebar')
@stop

@section('content')

    <div class="span9">

        <h3>Dashboard</h3>

        @if (Session::has('message'))
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('message') }}
            </div>
        @endif

        {{ Form::open(array('url' => 'login', 'method' => 'post')) }}

        <p>{{ Form::label('username', 'Nazwa użytkownika: ') }} {{ Form::text('username') }}</p>

        <p>{{ Form::label('password', 'Hasło: ') }} {{ Form::password('password') }}</p>

        <p>{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}</p>

        {{ Form::close() }}

    </div>
@stop


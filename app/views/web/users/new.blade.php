@extends('web.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <h3>Dodaj użytkownika</h3>

        {{ Form::open(array('url' => 'users/create')) }}

        <p>{{ Form::label('name', 'Nazwa użytkownika: ') }} {{ Form::text('name') }}</p>

        <p>{{ Form::label('email', 'Adres e-mail: ') }} {{ Form::text('email') }}</p>

        <p>{{ Form::submit('Dodaj', array('class' => 'btn btn-primary')) }}</p>

        {{ Form::close() }}

    </div>
@stop
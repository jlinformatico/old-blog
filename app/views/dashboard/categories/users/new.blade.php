@extends('dashboard.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <h3>Dodaj użytkownika</h3>

        @if($errors->count() > 0)

            @foreach($errors->all() as $error)

                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ $error }}
                </div>

            @endforeach

        @endif

        {{ Form::open(array('url' => 'users/store')) }}

        <p>{{ Form::label('username', 'Nazwa użytkownika: ') }} {{ Form::text('username') }}</p>

        <p>{{ Form::label('email', 'Adres e-mail: ') }} {{ Form::text('email') }}</p>

        <p>{{ Form::label('password', 'Hasło: ') }} {{ Form::password('password') }}</p>

        <p>{{ Form::label('password_confirmation', 'Potwierdzenie hasła: ') }} {{ Form::password('password_confirmation') }}</p>

        <p>{{ Form::submit('Dodaj', array('class' => 'btn btn-primary')) }}</p>

        {{ Form::close() }}

    </div>
@stop
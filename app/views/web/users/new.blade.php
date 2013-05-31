@extends('web.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <h3>Dodaj użytkownika</h3>

        @if($errors->count() > 0)

            <div class="alert alert-error" style="list-style: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $errors->first('nazwa', '<li>:message</li>') }}</p>
                <p>{{ $errors->first('email', '<li>:message</li>') }}</p>
            </div>

        @endif

        {{ Form::open(array('url' => 'users/create')) }}

        <p>{{ Form::label('nazwa', 'Nazwa użytkownika: ') }} {{ Form::text('nazwa') }}</p>

        <p>{{ Form::label('email', 'Adres e-mail: ') }} {{ Form::text('email') }}</p>

        <p>{{ Form::submit('Dodaj', array('class' => 'btn btn-primary')) }}</p>

        {{ Form::close() }}

    </div>
@stop
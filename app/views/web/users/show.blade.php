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

            <a href="#myModal" role="button" class="btn" data-toggle="modal">Usuń użytkownika</a>

            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Potwierdzenie</h3>
                </div>
                <div class="modal-body">
                    <p>Czy na pewno chcesz usunąć ten rekord?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Anuluj</button>
                    {{ Form::open(array('url' => 'user/delete/' . $user->id, 'method' => 'delete', 'style' => 'display: inline')) }}
                    {{ Form::submit('Usuń', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        <!--
            {{ Form::open(array('url' => 'user/delete', 'method' => 'delete')) }}
            {{ Form::hidden('id', $user->id) }}
            {{ Form::submit('Usuń') }}
            {{ Form::close() }}
        -->

        </div>

    </div>
@stop
@extends('dashboard.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

        <div class="span12">

            <h3>Dane użytkownika</h3>
            <table class="table table-condensed">

                <tbody>

                    <tr>
                        <td style="width: 20%;">ID</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Nazwa użytkownika</td>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <td>Adres email</td>
                        <td>{{ $user->email }}</td>
                    </tr>

                </tbody>

            </table>

            <a href="#myModal2" role="button" class="btn" data-toggle="modal">Edytuj dane</a>
            <a href="#myModal" role="button" class="btn btn-danger" data-toggle="modal">Usuń</a>

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
                    {{ Form::open(array('url' => 'users/destroy/' . $user->id, 'method' => 'delete', 'style' => 'display: inline')) }}
                    {{ Form::submit('Usuń', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </div>
            </div>

        </div>

    </div>

@stop
@extends('web.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')

    <div class="span9">

    <h3>Lista użytkowników</h3>

        <table class="table table-striped">

          <thead>
            <tr>
              <th>ID</th>
              <th>Nazwa</th>
              <th>Adres e-mail</th>
            </tr>
          </thead>

          <tbody>

            @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{ URL::route('user', $user->id) }}">{{ $user->name }}</a></td>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
            </tr>

            @endforeach

          </tbody>

        </table>

    </div>

@stop
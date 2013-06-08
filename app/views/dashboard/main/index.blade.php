@extends('dashboard.layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
<div class="span9">

    <h3>Main dashboard</h3>

    @if (Session::has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get('message') }}
        </div>

    @endif

</div>

@stop
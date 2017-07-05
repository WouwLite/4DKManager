@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">Clients</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>Client Overview</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        {{-- Add navbar --}}
        {{--{{ Form::open(['route' => 'clients.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) }}--}}
        <form action="" class="navbar-form navbar-right" role="search">
            <div class="input-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>
            </div>
        </form>
        {{--{{ Form::close() }}--}}

        {{-- Add table to show users --}}
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Naam</th>
                    <th>Functie</th>
                    <th>Tentnr</th>
                    <th>Vak</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->code }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->function }}</td>
                    <td>{{ $client->tent }}</td>
                    <td>{{ $client->field }}</td>
                    <td>
                        <a type="button" href="/dashboard/clients/show/{{ $client->id }}" class="btn btn-info">Info</a> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
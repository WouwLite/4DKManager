@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">Clients</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>@include('includes/goBack') Client Overview</h1>
@stop

@section('content')
    <head>
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    </head>

    {{-- Add navbar --}}
    <form action="" class="navbar-form navbar-right" role="search">
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Zoeken...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
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
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Rol</th>
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
                <td>{{ $client->lastname }}</td>
                <td>
                    @if($client->roles->id >= 1 && $client->roles->id <= 3)
                        <span class="label label-danger">{{ $client->roles->role }}</span>
                    @elseif($client->roles->id >= 4 && $client->roles->id <= 49)
                        <span class="label label-info">{{ $client->roles->role }}</span>
                    @else
                        {{ $client->roles->role }}
                    @endif
                </td>
                <td>{{ $client->tent }}</td>
                <td>{{ $client->field }}</td>
                <td align="right">
                    <a type="button" href="/dashboard/clients/show/{{ $client->id }}" class="btn btn-info">Info</a> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/dashboard/night">Nacht</a></li>
        <li><a href="/dashboard/night/wake-up">Wekdienst</a></li>
        <li class="active">@{{ $client->name }}</li>
    </ol>
    <h1>@{{ $client->name }}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <h2>Aaaaaaaaaah paniek! Deze pagina bestaat (nog) niet!</h2>
        <br>
        <br>
        <br>
        <img src="http://cdn.wouwlite.eu/4dk.nl/images/404errorStarWars.gif">
    </div>
@stop
@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/error">Error</a></li>
        <li class="active">Unauthorized</li>
    </ol>
    <h1>@include('includes/goBack') Error: Unauthorized!</h1>
@stop

@section('content')

    <div class="container-fluid">
        <h2>Ohoh, u heeft geen rechten!</h2>
        <br>
        <br>
        U heeft niet de juiste rechten om deze pagina te mogen bekijken. Neem contact op met de beheerder op <a href="mailto:beheer@4dk.nl">beheer@scoutroam.org</a>.
        <br>
        <img src="http://cdn.wouwlite.eu/4dk.nl/images/notAuthorizedMeme.jpg">
    </div>

@stop
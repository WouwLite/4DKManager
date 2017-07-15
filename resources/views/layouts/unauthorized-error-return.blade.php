@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/error">Error</a></li>
        <li class="active">Unauthorized</li>
    </ol>
    <h1>@include('includes/goBack') <i class="fa fa-user-times"></i> Unauthorized</h1>
@stop

@section('content')

    {{-- Temp overwrite for local development --}}
    <head>
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    </head>

    <div class="container-fluid">
        {{--<h2>Geblokkeerd</h2>--}}
        <div class="alert alert-danger" role="alert">
            <strong><i class="fa fa-user-times"></i> Geblokkeerd</strong> U heeft niet de juiste rechten om deze pagina te mogen bekijken. Neem contact op met de beheerder op <a href="mailto:beheer@4dk.nl">beheer@scoutroam.org</a>
        </div>
        <br><br>
        <img src="/img/notAuthorizedMeme.jpg" style="max-width: 30%">
    </div>

@stop
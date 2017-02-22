@extends('adminlte::page')

@section('title', 'Scoutroam')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li class="active">Overzicht</li>
    </ol>
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <h1>Welkom {{ Auth::user()->name }}!</h1>
        @if(Auth::user()->admin === 1)
            <p>Je bent aangemeld als <span class="label label-warning"><strong>beheerder</strong></span></p>
        @else
            <p>Je bent aangemeld als <span class="label label-primary"><strong>{{ Auth::user()->function }}</strong></span></p>
        @endif
        <div class="row">
            <div class="col-sm-2">
                {!! QrCode::size(150)->generate(Auth::user()->code) !!}<br>
                {{ Auth::user()->code}}<br>
            </div>
            <div class="col-sm-3">
                Je ID is: <br>
                Je deelnemernummer is: <br>
                Je emailadres is: <br>
                Je functie is: <br>
            </div>
            <div class="col-sm-7">
                <span class="label label-default">{{ Auth::user()->id }}</span><br>
                <span class="label label-default">{{ Auth::user()->code }}</span><br>
                <span class="label label-default">{{ Auth::user()->email }}</span><br>
                <span class="label label-default">{{ Auth::user()->function }}</span><br>
            </div>
        </div>
    </div>

    <img src="http://cdn.wouwlite.eu/4dk.nl/images/4dkCodeExampleHome.png" alt="Code Example" width="80%">

    <div class="container-fluid hidden">
        <p>Functies</p>
        <select class="form-control">
            <option>Bezoeker</option>
            <option>Loper</option>
            <option>Externe loper</option>
            <option>Ondersteuner</option>
            <option>Medewerker</option>
            <option>Kind van medewerer</option>
            <option>Teamleider</option>
            <option>Organisatie</option>
            <option>Kernteam</option>
        </select>
    </div>
@stop
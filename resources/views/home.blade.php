@extends('adminlte::page')

@section('title', '4DK Manager')

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
        @if(Auth::user()->admin === 1 && Auth::user()->function === "beheerder")
            <p>Je bent aangemeld als <span class="label label-warning"><strong>beheerder</strong></span></p>
            <div class="container-fluid" style="background-color: navajowhite;">
                <strong>Admin Quicklinks</strong>
                <ol>
                    <li><a href="/debug/errors">Errorlog / Bugs</a></li>
                    <li><a href="/IT/dashboard">IT Dashboard</a></li>
                    <li><a href="/IT/NOC">Network Operations Center</a></li>
                </ol>
                <p>Admin Interface is shown when function is "beheerder" and admin is "1".</p>
            </div><br>
        @else
            <p>Je bent aangemeld als <span class="label label-primary"><strong>{{ Auth::user()->function }}</strong></span></p>
        @endif
        <div class="row">
            <div class="col-sm-2">
                {!! QrCode::size(150)->generate(Auth::user()->id) !!}<br>
                QR waarde: {{ Auth::user()->id }}<br>
            </div>
            <div class="col-sm-3">
                Je ID is: <br>
                Je deelnemernummer is: <br>
                Je emailadres is: <br>
                Je functie is: <br>
                <br>
                <p>
                    <span class="label label-primary">bug</span>: <span class="label label-danger">WARNING</span> binded QR to ID instead of CODE (due to errors)
                    See the <a href="debug/errors">errorlog</a>.
                </p>
            </div>
            <div class="col-sm-7">
                <span class="label label-default">{{ Auth::user()->id }}</span><br>
                <span class="label label-default">{{ Auth::user()->code }}</span><br>
                <span class="label label-default">hidden</span><br>
                <span class="label label-default">{{ Auth::user()->function }}</span><br>
            </div>
        </div>
    </div>

    {{--<img src="http://cdn.wouwlite.eu/4dk.nl/images/4dkCodeExampleHome.png" alt="Code Example" width="80%">--}}

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
    <br><br>
    <div class="container-fluid">
        <h2>Function Test Environment (FTE)</h2>
        <h3>Search function</h3>
        <p>

            Toevoegen: nieuws pagina, scouting-app nieuws api, CTEAM evaluatie blog ding

        </p>
    </div>
@stop
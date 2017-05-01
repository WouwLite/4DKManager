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
                <ol>
                    <li><a href="/dashboard/badges/printOne/1337">Badge Template 1-1</a></li>
                    <li><a href="/dashboard/badges/printMultiple">Badge Template 3-1</a></li>
                </ol>
                <p>Admin Interface is shown when function is "beheerder" and admin is "1".</p>
            </div><br>
        @else
            <p>Je bent aangemeld als <span class="label label-primary"><strong>{{ Auth::user()->function }}</strong></span></p>
        @endif
        <div class="row">
            <div class="col-sm-2">
                {!! QrCode::size(150)->generate(Auth::user()->code) !!}<br>
                QR waarde: {{ Auth::user()->code }}<br>
            </div>
            <div class="col-sm-3">
                Je ID is: <br>
                Je deelnemernummer is: <br>
                Je emailadres is: <br>
                Je functie is: <br>
                <br>
            </div>
            <div class="col-sm-7">
                <span class="label label-default">{{ Auth::user()->id }}</span><br>
                <span class="label label-default">{{ Auth::user()->code }}</span><br>
                <span class="label label-default">hidden</span><br>
                <span class="label label-default">{{ Auth::user()->function }}</span><br>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <h2>Function Test Environment (FTE)</h2>
        <h3>Search function</h3>
    </div>
@stop
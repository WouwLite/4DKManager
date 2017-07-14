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
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <title>Deelnemerinformatie</title>
    </head>
    <body>

    @include('includes/error')
    <h1>Welkom {{ Auth::user()->name }}</h1>
    <div class="row">
        <div class="container-fluid">
            <br><br>
            <div class="panel panel-default col-md-8 col-sm-8">
                <h3>Algemene gegevens</h3>
                <hr>

                <div class="col-md-3 col-sm-6">
                    <ul style="list-style-type: none;">
                        <li><h4>Code</h4></li>
                        <li><hr></li>
                        <li>Naam</li>
                        <li>Email</li>
                        <li><hr></li>
                        <li>Geverifiëerd</li>
                        <li>Rol</li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-6">
                    <ul style="list-style-type: none">
                        <li><h4>{{ Auth::user()->code }}</h4></li>
                        <li><hr></li>
                        <li><b>{{ Auth::user()->name }}</b></li>
                        <li><b>{{ Auth::user()->email }}</b></li>
                        <li><hr></li>
                        <li>
                            @if(Auth::user()->isApproved == 1)
                                <label class="label label-success">Ja</label>
                            @else
                                <label class="label label-warning">Nee</label>
                            @endif
                        </li>
                        <li><b>{{ Auth::user()->function }}</b></li>
                    </ul>
                </div>

                <div class="col-md-3" style="text-align: center">
                    {!! QrCode::size(150)->generate(Auth::user()->code) !!}
                </div>

                <br><br>
            </div>

            {{--<div class="container col-sm-1"></div>--}}

            <div class="col-sm-4">
                <div class="panel panel-default col-sm-12">
                    <h3>Snelle acties</h3>
                    <hr>
                    <button type="button" class="btn btn-primary btn-lg" style="width: 100%" disabled><i class="fa fa-bed" aria-hidden="true"></i> Wekdienst</button><br><br>
                    <button type="button" class="btn btn-success btn-lg" style="width: 100%" disabled><i class="fa fa-check" aria-hidden="true"></i> Wakker melden</button><br><br>
                    <button type="button" class="btn btn-success btn-lg" style="width: 100%" disabled><i class="fa fa-plus" aria-hidden="true"></i> Opgeven maaltijd</button><br>
                    <br>
                </div>

                <div class="panel panel-default col-sm-12">
                    <h3>Beheer</h3>
                    <hr>
                    <button type="button" class="btn btn-primary" style="width: 100%" disabled><i class="fa fa-cog" aria-hidden="true"></i> Gegevens wijzigen</button><br><br>
                    <button type="button" class="btn btn-success" style="width: 100%" disabled><i class="fa fa-plus" aria-hidden="true"></i> Nieuwe maaltijd toevoegen</button><br>
                    <br>
                </div>
            </div>
        </div>

        @if(Auth::user()->admin === 1 && Auth::user()->function === "developer")
            <strong>Je ziet dit omdat je aangemeld bent als <span class="label label-warning"><strong>developer</strong></span></strong>
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
            </div>
            <br>
        </div>
        <br><br>
        <div class="container-fluid">
            <h2>Function Test Environment (FTE)</h2>
            <h3>Search function</h3>
        </div>
    @endif
@stop
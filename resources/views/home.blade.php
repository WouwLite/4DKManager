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
            <style>
                body{padding-top:30px;}

                .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

                small {
                    display: block;
                    line-height: 1.428571429;
                    color: #999;
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4" style="text-align: center">
                                    {!! QrCode::size(150)->generate(Auth::user()->code) !!}<br>
                                    QR waarde: {{ Auth::user()->code }}<br>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p>
                                        <i class="fa fa-envelope" aria-hidden="true"></i> {{ Auth::user()->email }}
                                        <br />
                                        <i class="fa fa-users" aria-hidden="true"></i> <span class="badge badge-default">{{ Auth::user()->function }}</span>
                                        <br />
                                        @if(Auth::user()->admin === 1)
                                            Je bent aangemeld als <span class="label label-warning"><strong>beheerder</strong></span>
                                        @endif
                                    </p>
                                    <!-- Buttongroup -->
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Wekdienst</button>
                                        <button type="button" class="btn btn-primary">Wakker melden</button>
                                        <button type="button" class="btn btn-primary">Opgeven maaltijd</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        @if(Auth::user()->admin === 1 && Auth::user()->function === "developer")
            <p>Je bent aangemeld als <span class="label label-warning"><strong>developer</strong></span></p>
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
    @endif
@stop
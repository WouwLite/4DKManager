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
                                        <i class="glyphicon glyphicon-envelope"></i>{{ Auth::user()->email }}
                                        <br />
                                        <i class="glyphicon glyphicon-globe"></i>{{ Auth::user()->name }}
                                        <br />
                                        <i class="glyphicon glyphicon-gift"></i>{{ Auth::user()->name }}
                                    </p>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">
                                            Social</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span><span class="sr-only">Social</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Twitter</a></li>
                                            <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                            <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Github</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





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
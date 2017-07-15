@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/dashboard/clients">Clients</a></li>
        <li class="active">{{ $client->name }} {{ $client->lastname }}</li>
    </ol>
    <h1>@include('includes/goBack') Deelnemerinformatie</h1>
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

    <h1>{{ $client->name }} {{ $client->lastname }}</h1>
    <div class="row">
        <div class="container-fluid">
            <br><br>
            <div class="panel panel-default col-sm-8">
                <h3>Algemene gegevens</h3>
                <hr>

                <div class="col-md-3">
                    <ul style="list-style-type: none;">
                        <li>Code</li>
                        <li>Naam</li>
                        <li>Achternaam</li>
                        <li>Email</li>
                        <li>Adres</li>
                        <li>Postcode & Plaats</li>
                        <li>Land</li>
                        <li><hr></li>
                        <li>Rol</li>
                        <li>Slaapplaats & veld</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type: none">
                        <li><b>{{ $client->code }}</b></li>
                        <li><b>{{ $client->name }}</b></li>
                        <li><b>{{ $client->lastname }}</b></li>
                        <li><b>{{ $client->email }}</b></li>
                        <li><b>{{ $client->address }}</b></li>
                        <li><b>{{ $client->postalcode }}, {{ $client->city }}</b></li>
                        <li><b>{{ $client->countries->country }}</b></li>
                        <li><hr></li>
                        <li><b>{{ $client->roles->role }}</b></li>
                        <li><b>@if(!empty($client->tent)) {{ $client->tent }}, {{ $client->field }} @else Slaapt elders @endif</b></li>
                    </ul>
                </div>

                <div class="col-md-3" style="text-align: center">
                    {!! QrCode::size(150)->generate(Auth::user()->code) !!}
                </div>

                <p style="color: red;">Feature toevoegen: *vlaggetjes bij land (famfam icons)</p>
                <br><br>
            </div>

            {{--<div class="container col-sm-1"></div>--}}

            <div class="col-sm-4">
                <div class="panel panel-default col-sm-12">

                    @if((!empty($client->allergies)) OR (!empty($client->diets)))
                        <div class="alert alert-warning" role="alert">Let op! {{ $client->name }} heeft speciale wensen.</div>
                    @endif

                    <h3>Allergiën</h3>
                    <hr>

                    @if(!empty($client->allergies))
                        <ul>
                            <li><h4><span class="label label-info">{{ $client->allergies}}</span></h4></li>
                        </ul>
                    @else
                        <ul>
                            <li>Geen allergiën</li>
                        </ul>
                    @endif

                    <h3>Dieëten</h3>
                    <hr>

                    @if(!empty($client->diets))
                        <ul>
                            <li><h4><span class="label label-info">{{ $client->diets }}</span></h4></li>
                        </ul>
                    @else
                        <ul>
                            <li>Geen dieet</li>
                        </ul>
                    @endif

                    <br>
                </div>

                <div class="panel panel-default col-sm-12 col-md-12">
                    <h3>Beheer</h3>
                    <hr>
                    <button type="button" class="btn btn-primary" style="width: 100%"><i class="fa fa-cog" aria-hidden="true"></i> Gegevens wijzigen</button><br><br>
                    <button type="button" class="btn btn-success" style="width: 100%"><i class="fa fa-plus" aria-hidden="true"></i> Nieuwe maaltijd toevoegen</button><br>
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid">
            <div class="panel panel-default">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Ontbijt</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($client->meals as $meal)
                        <tr>
                            <td>{{ $meal->date }}</td>
                            <td>
                                {{-- Repeating code, make function --}}
                                @if($meal->breakfast == 0)
                                    <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                                @elseif($meal->breakfast == 1)
                                    <button type="button" id="breakfastButtonCheck" class="btn btn-default" disabled><i class="fa fa-check fa-2x text-success"></i></button>
                                @elseif($meal->breakfast == 2)
                                    <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                                @endif
                            </td>
                            <td>
                                @if($meal->lunch == 0)
                                    <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                                @elseif($meal->lunch == 1)
                                    <button type="button" id="breakfastButtonCheck" class="btn btn-default" disabled><i class="fa fa-check fa-2x text-success"></i></button>
                                @elseif($meal->lunch == 2)
                                    <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                                @endif
                            </td>
                            <td>
                                @if($meal->dinner == 0)
                                    <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                                @elseif($meal->dinner == 1)
                                    <button type="button" id="breakfastButtonCheck" class="btn btn-default" disabled><i class="fa fa-check fa-2x text-success"></i></button>
                                @elseif($meal->dinner == 2)
                                    <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                                @endif
                            </td>
                            <td align="right"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Aanpassen @if(Auth::user()->admin == 1)(modal)@endif</button> <button type="button" class="btn btn-danger disabled"><i class="glyphicon glyphicon-ban-circle" aria-hidden="true"></i> Verwijderen @if(Auth::user()->admin == 1)(modal)@endif</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
    </html>
@stop
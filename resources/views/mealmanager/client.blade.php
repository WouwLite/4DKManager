@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/dashboard/meals">Meals</a></li>
        <li><a href="/dashboard/meals/client">Gebruikers</a></li>
        <li class="active">{{ $client->name }}</li>
    </ol>
    <h1>Meals Overview</h1>
@stop

@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Overzicht maaltijden per gebruiker</title>
    </head>
    <body>

    <h1>{{ $client->name }}</h1>

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
                    @if($meal->breakfast == 0)
                        <button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i>NO</button>--}}
                    @elseif($meal->breakfast == 1)
                        <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i>YES</button>--}}
                    @elseif($meal->breakfast == 2)
                        <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i>OK</button>--}}
                    @endif
                </td>
                <td>
                    @if($meal->lunch == 0)
                        <button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i>NO</button>--}}
                    @elseif($meal->lunch == 1)
                        <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i>YES</button>--}}
                    @elseif($meal->lunch == 2)
                        <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i>OK</button>--}}
                    @endif
                </td>
                <td>
                    @if($meal->dinner == 0)
                        <button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i>NO</button>--}}
                    @elseif($meal->dinner == 1)
                        <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i>YES</button>--}}
                    @elseif($meal->dinner == 2)
                        <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" disabled><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
                        {{--<button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i>OK</button>--}}
                    @endif
                </td>
                <td><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="glyphicon glyphicon-ban-circle" aria-hidden="true"></i></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
    </html>
@stop
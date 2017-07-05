@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/dashboard/clients">Clients</a></li>
        <li class="active">{{ $client->name }} {{ $client->lastname }}</li>
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
        <title>Gebruikerinformatie</title>
    </head>
    <body>

    <h1>{{ $client->name }} {{ $client->lastname }}</h1>
    <div class="row">
        <div class="container-fluid">
            <div class="panel panel-default col-sm-5">
                <h3>Algemene gegevens</h3>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet cum debitis deleniti error excepturi exercitationem harum inventore modi molestiae nam nesciunt numquam, praesentium, quaerat recusandae veniam veritatis vitae voluptates!
            </div>

            <div class="container col-sm-1"></div>

            <div class="panel panel-default col-sm-5">
                <h3>Allergiën / dieëten</h3>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consectetur id ipsum iusto laboriosam recusandae? Ad assumenda eaque, eum harum, magnam, modi nesciunt non officiis quis repellat sit tempore temporibus!
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
                            <td><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Aanpassen</button> <button type="button" class="btn btn-danger disabled"><i class="glyphicon glyphicon-ban-circle" aria-hidden="true"></i> Verwijderen</button></td>
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
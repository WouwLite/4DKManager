@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">MealManager</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>Meals Overview</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="table-responsive">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> This page is broken! No serious, it's really broken
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Naam</th>
                    <th>Ontbijt</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->code }}</td>
                        <td>{{ $client->name }}</td>
                        <td><button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button></td>
                        <td><button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button></td>
                        <td><button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i></button></td>
                        <td>
                            <button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <h1>Button tests</h1>
        <p>Client isn't allowed to have meal</p>
        <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
        <p>Client has meal, manager can check if approved</p>
        <button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i></button>
        <p>Meal is approved and checked</p>
        <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>

        <br><br><br>
        <h1>Test Sectie</h1>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Go away!</strong> This part is even more broken than the rest.. Just look away, please. Just do it.
        </div>
        FUCKING RELATIONSHIPS ARE BROKEN

        {{--Testje: {{ Client::meal()->client_id }}--}}

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Naam</th>
                <th>Ontbijt</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                {{--@if($meals->date)--}}
                @foreach($meals as $meal)
                <tr>
                    <td>{{ $client->code }}</td>
                    <td>{{ $client->name }}</td>
                    <td>
                    @if($meal->breakfast == 0)
                        <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                    @elseif($meal->breakfast == 1)
                        <button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i></button>
                    @elseif($meal->breakfast == 2)
                        <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                    @endif
                    </td>
                    <td>
                        @if($meal->lunch == 0)
                            <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                        @elseif($meal->lunch == 1)
                            <button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i></button>
                        @elseif($meal->lunch == 2)
                            <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                        @endif
                    </td>
                    <td>
                        @if($meal->dinner == 0)
                            <button type="button" id="breakfastButtonTimes" class="btn btn-default" disabled><i class="fa fa-times fa-2x text-danger"></i></button>
                        @elseif($meal->dinner == 1)
                            <button type="button" id="breakfastButtonCheck" class="btn btn-default"><i class="fa fa-check fa-2x text-success"></i></button>
                        @elseif($meal->dinner == 2)
                            <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success" disabled><i class="fa fa-check fa-2x"></i></button>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                    </td>
                </tr>
                {{--@endif--}}
                @endforeach
            @endforeach
            </tbody>
        </table>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
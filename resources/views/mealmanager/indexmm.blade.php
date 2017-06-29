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
                        <td><i class="fa fa-times fa-2x text-danger"></i></td>
                        <td><i class="fa fa-check fa-2x text-success"></i></td>
                        <td><i class="fa fa-times fa-2x text-danger"></i></td>
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
        <button type="button" id="breakfastButtonCheckBlocked" class="btn btn-success"><i class="fa fa-check fa-2x"></i></button>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">MealManager</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>@include('includes/goBack') Meals Overview</h1>
@stop

@section('content')
    {{--@if(Auth::user()->admin === 1)--}}
        <div class="table-responsive">
            @include('includes/error')

            @include('includes/meal-buttons')

            <h4>Overzicht alle maaltijden</h4>

            @php
                $currentDate = date("l j F Y");
            @endphp

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>Code</th>
                    <th>Naam</th>
                    <th>Ontbijt</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($meals as $meal)
                        <tr>
                            <td>{{ $meal->date }}</td>
                            <td>{{ $meal->client->code }}</td>
                            <td><b>{{ $meal->client->name }}</b></td>
                            <td>
                                {{-- Repeating code, make function --}}
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
                            <td align="right">
                                @if(!empty($meal->client->allergies) && !empty($meal->client->diets))
                                    <a type="button" href="/dashboard/clients/show/{{ $meal->client->id }}" class="btn btn-warning"><span class="fa fa-exclamation-triangle"></span> Info</a>
                                @else
                                    <a type="button" href="/dashboard/clients/show/{{ $meal->client->id }}" class="btn btn-info">Info</a>
                                @endif
                                <button type="button" class="btn btn-primary" disabled><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger" disabled><i class="fa fa-ban" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>

            @if(Auth::user()->admin === 1 && Auth::user()->function === "developer")
            <h1>@{{ Opmerkingen }}</h1>
            icons tijdelijk aangepast in verband met offline-werken en functionaliteiten die "opeens" niet meer werken (blijkbaar worden JS en CSS extern aangeroepen).

            <h1>@{{ PROGRAMMERING }}</h1>

            <h2>Methoden om een maaltijd te registreren</h2><br>
            Omwille van de basis-functionaliteit wordt <strong>éérst</strong> optie 1 uitgevoerd.<br>

            <h3>1) Handmatig zoeken op Codenummer (bijv. 20179999) en dan geselecteerde maaltijd afvinken</h3><br>
            <strong>Vooral handig bij nachtdienst</strong> i.v.m. combinatie ontbijt / lunch<br>
            <h3>2) Middels het scannen van een QR-code en dan automatisch afvinken</h3><br>
            <strong>Vooral handig bij het afvinken bij massa-momenten zoals lunch en dinner</strong> i.v.m. snelle doorstroming
            @endif
        </div>
@stop
@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/IT">IT</a></li>
        <li class="active">NOC</li>
    </ol>
    <h1>Network Operations Center</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid">
            <h2>Aaaaaaaaaah paniek! Deze pagina bestaat (nog) niet!</h2>
            <br>
            <br>
            Deze pagina is nog niet openbaar zichtbaar.
            <br>
            <img src="http://cdn.wouwlite.eu/4dk.nl/images/404errorStarWars.gif">
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
@extends('adminlte::page')
{{ $pageTitle = 'Routekaartjes' }}

@section('title', 'Scoutroam')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Openbaar</a></li>
        <li><a href="/home">4Daagse</a></li>
        <li class="active">Routes</li>
    </ol>
    <h1>{{ $pageTitle }}</h1>
@stop

@section('content')
    @include('includes/error')
    <br>
    <br>
    @include('includes/4Droutes-buttons')
    <br><br>
    <h1>Route van de dag</h1>
    dd
    @if(Auth::user()->admin == 1)
        <p>Map with route to START and API public transportation</p>
        <h1>Plattegrond met route naar start. Overzicht (of shortcuts) naar OV mogelijkheden. etc.</h1>
    @endif
@stop
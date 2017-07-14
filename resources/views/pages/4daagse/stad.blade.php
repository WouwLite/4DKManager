@extends('adminlte::page')
{{ $pageTitle = 'Stad' }}

@section('title', 'Scoutroam')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Openbaar</a></li>
        <li><a href="/pages/4daagse">4Daagse</a></li>
        <li><a href="/pages/4daagse/routes">Routes</a></li>
        <li class="active">{{ $pageTitle }}</li>
    </ol>
    <h1>Routekaart {{ $pageTitle }}</h1>
@stop

@section('content')
    @include('includes/error')
    <br><br>
    @include('includes/4Droutes-buttons')
    <br><br>
    <h1>4Daagse Feesten</h1>
    <img src="/img/plattegrond-4df.jpg" style="max-width: 100%"><br>
    <img src="/img/plattegrond-4df-info.png" style="max-width: 100%"><br>
@stop
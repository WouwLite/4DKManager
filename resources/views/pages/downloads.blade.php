@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li class="active">Downloads</li>
    </ol>
    <h1>Downloads</h1>
@stop

@section('content')
    @include('includes/error')
    <h2>Downloads</h2>
    <br>
    <br>
    Er zijn nog geen downloads beschikbaar.


    @if(Auth::user()->admin === 1)
        <br><br>
        <p>Downloads aanroepen via Database, foreach loop maken voor het genereren van downloads.</p>
        <p>Organisatie-specifieke downloadslijst</p>
    @endif
@stop
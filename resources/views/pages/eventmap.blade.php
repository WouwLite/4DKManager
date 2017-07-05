@extends('adminlte::page')

@section('title', 'Scoutroam')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li class="active">Plattegrond</li>
    </ol>
    <h1>Plattegrond</h1>
@stop

@section('content')
    @include('includes/error')
    <img src="http://cdn.wouwlite.eu/4dk.nl/images/plattegrond.png" alt="4DK Plattegrond" width="100%">
    <p>
        <a class="btn btn-primary btn-lg" disabled="disabled" role="button"><i class="fa fa-bed" aria-hidden="true"></i> Waar slaap ik?</a>
        <a class="btn btn-default btn-lg" disabled="disabled" role="button"><i class="fa fa-search" aria-hidden="true"></i> Deelnemer zoeken</a>
    </p>
@stop
@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/dashboard/night">Nacht</a></li>
        <li class="active">Wekdienst</li>
    </ol>
    <h1>Wekdienst</h1>
@stop

@section('content')
    @include('includes/error')
    <h2>Overzicht wekdienst</h2>
@stop
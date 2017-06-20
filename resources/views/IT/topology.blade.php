@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/IT">IT</a></li>
        <li class="active">Topology</li>
    </ol>
    <h1>IT Topology</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid">
            <h2>Netwerk topologie Scoutroam 4DK-2017</h2>
            <br>
            @include('includes.IT-buttons')
            <br>
            <br>
            <img src="//cdn.wouwlite.eu/4dk.nl/images/2017-4DK-TopologyNetwork.png" style="max-width: 100%;">
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
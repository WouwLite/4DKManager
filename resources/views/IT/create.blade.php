@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')

    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/IT">IT</a></li>
        <li> <a href="/IT/byod">Bring Your Own Device</a></li>
        <li class="active">Add new</li>
    </ol>
    <h1>Bring Your Own Device</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid">
            <h2>BYOD Manager</h2>
            <br>
            @include('includes.IT-buttons')
            <br>
            <br>
            content
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
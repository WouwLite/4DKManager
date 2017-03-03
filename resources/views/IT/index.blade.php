@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/IT">IT</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <h1>IT Dashboard</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        IT DASHBOARD CONTENT
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
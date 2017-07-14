@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')

    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">Clients</a></li>
        <li class="active">Add new</li>
    </ol>
    <h1>Add new client</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid">
            <h2>Nieuwe deelnemer</h2>
            <br>
            HIER KOMT FORM

            <form method="POST" action="/dashboard/clients">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Titel</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" id="body" name="body">
                </div>

                <button type="submit" class="btn btn-primary">Aanmaken!</button>
            </form>


            <form method="POST" action="/dashboard/clients">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $meal->client->id }}" >
                <button type="submit" class="btn btn-success" id="breakfast" name="breakfast" value="2">Ontbijt</button>
            </form>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
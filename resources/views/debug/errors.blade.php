@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/debug">Debugging</a></li>
        <li class="active">Errorlog</li>
    </ol>
    <h1>Errorlog</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid table-bordered">
            @foreach($errors as $error)
                    <div class="col-sm-12">
                        @if($error->status === 3)
                            <h2><span class="label label-success">Solved</span> Bug #{{ $error->id }} - {{ $error->title }}</h2>
                        @else
                            <h2><span class="label label-danger">Open</span> Bug #{{ $error->id }} - {{ $error->title }}</h2>
                        @endif
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <p>
                            {{ $error->body }}
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <h3>Solution</h3>
                        <p>
                            {{ $error->solution }}
                        </p>
                    </div>
            @endforeach
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
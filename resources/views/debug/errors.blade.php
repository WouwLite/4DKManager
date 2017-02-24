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
            {{-- START BUG TEMPLATE --}}
            <div class="col-sm-12">
                <h2>Bug #1 - Registration without usercode, view generation error</h2>
                <p>
                    When creating a new account, the value of 'Code' remains empty (can be NULL).<br>
                    Issue: home.blade.php doesn't load when value is NULL. This is because the QR code cannot generate NULL.
                </p>
            </div>
            <div class="col-sm-2">
                <h3>Status</h3>
                <p>
                    <span class="label label-danger">Unsolved</span>
                    {{--<span class="label label-warning">Testing</span>--}}
                    {{--<span class="label label-success">Solved</span>--}}
                </p>
            </div>
            <div class="col-sm-10">
                <h3>Solution</h3>
                <p>
                    Create random number generator with yearly prefix (2017xxxx)
                </p>
            </div>
            {{-- END BUG TEMPLATE --}}
        </div>
    @else
        <div class="container-fluid">
            <h1>Sorry u heeft geen rechten om deze pagina te bekijken! <a href="home">Ga terug</a></h1>
        </div>
    @endif
@stop
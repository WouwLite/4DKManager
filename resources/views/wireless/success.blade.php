<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>Scoutroam Passpoint</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    {{--<!-- Scripts -->--}}
    {{--<script>--}}
        {{--window.Laravel = {!! json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) !!};--}}
    {{--</script>--}}
</head>

<br><br>
<div class="container-float" style="text-align: center">
    <div class="jumbotron">
        {{--<img src="http://scoutroam.org/scoutroam-web.png" style="max-width: 100%">--}}
        <img src="//4dk.dev/img/scoutroam-web.png" style="max-width: 100%">
        <h1>{{ config('app.name', 'Scoutroam Passpoint') }}</h1>
        @if((Auth::user() == true))
            <div class="alert alert-success" role="alert"><h2><span class="fa fa-check"></span> Hi {{ Auth::user()->name }}, je bent succesvol verbonden!</h2></div>
        @else
            <div class="alert alert-success" role="alert"><h2><span class="fa fa-checkk"></span> U bent succesvol verbonden!</h2></div>
        @endif

        @if(Auth::user() == true)
            <a type="button" class="btn btn-primary btn-lg" href="/wireless/rules" style="min-width: 35%">Regels</a> <a type="button" class="btn btn-default btn-lg" href="/login" target="_blank" style="min-width: 15%"><span class="fa fa-dashboard" aria-hidden="true"></span> Dashboard</a>
        @else
            <a type="button" class="btn btn-primary btn-lg" href="/wireless/rules" style="min-width: 35%">Regels</a> <a type="button" class="btn btn-default btn-lg" href="/login" target="_blank" style="min-width: 15%"><span class="fa fa-user" aria-hidden="true"></span> Log in</a>
        @endif
    </div>
</div>
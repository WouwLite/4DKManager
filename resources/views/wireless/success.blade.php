<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scoutroam Passpoint</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Dashboard</a>
            @else
                <a href="{{ url('/login') }}">Aanmelden</a>
                <a href="{{ url('/register') }}">Registreren</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <img src="//4dk.dev/img/scoutroam-web.png" style="max-width: 100%; margin-top: 25px">
            <h1>{{ config('app.name', 'Scoutroam Passpoint') }}</h1>
            @if((Auth::user() == true))
                <div class="alert alert-success" role="alert"><h2><span class="fa fa-check"></span> Hi {{ Auth::user()->name }}, je bent succesvol verbonden!</h2></div>
            @else
                <div class="alert alert-success" role="alert"><h2><span class="fa fa-checkk"></span> U bent succesvol verbonden!</h2></div>
            @endif

            <a type="button" class="btn btn-primary btn-lg" href="/wireless/rules" style="min-width: 80%">Regels</a>
        </div>

        <div class="links">
            <a href="{{ url('/pages/campinfo') }}">Kampinfo</a>
            <a href="{{ url('/pages/map') }}">Plattegrond</a>
            <a href="{{ url('/pages/news') }}">Nieuws</a>
            <a href="{{ url('/pages/about') }}">Over ons</a>
            <a href="{{ url('/pages/contact') }}">Contact</a>
        </div>
    </div>
</div>
</body>
</html>
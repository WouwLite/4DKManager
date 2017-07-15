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
            <img src="http://scoutroam.org/scoutroam-web.png" style="max-width: 100%">
            <h1>Scoutroam WiFi regels</h1>

            <center>
                <div class="list-group center" style="max-width: 90%;">
                    <button type="button" class="list-group-item">Scoutroam is niet verantwoordelijk voor enig verlies van informatie of schade aan uw apparatuur als gevolg van het gebruik van het netwerk. De gebruiker blijft verantwoordelijk voor de veiligheid van zijn apparatuur, laptopconfiguraties, verwijderingen van beveiliging of wijzigingen aan bestanden als gevolg van het gebruik van het netwerk.</button>
                    <button type="button" class="list-group-item">Het is niet toegestaan informatie met een illegale aard over ons netwerk te versturen of bewust te ontvangen.</button>
                    <button type="button" class="list-group-item">Scoutroam heeft het recht het netwerk op ieder moment te deactiveren, om onderhoud te verrichten en om gelijktijdig gebruik te verdelen.</button>
                    <button type="button" class="list-group-item">Scoutroam heeft ook het recht een gebruiker van het netwerk te verwijderen indien hij zich niet houdt aan de spelregels in dit reglement.</button>
                    <button type="button" class="list-group-item">De netwerkverbinding is beperkt, ga niet streamen (v.b. Netflix en Youtube).</button>
                    <button type="button" class="list-group-item">Schakel automatische updates uit! Ook van uw telefoon (Android & IOS)!</button>
                    <button type="button" class="list-group-item">Scoutroam kan informatie verzamelen over uw surfgedrag ten behoeve van analytische doeleinden en beheer van het netwerk. Er worden geen persoonlijke gegevens bewaard.</button>
                </div>
                <br>
                <div class="list-group center" style="max-width: 90%;">
                    <button type="button" class="list-group-item">Vragen? Mail naar <b>beheer@scoutroam.org</b> of ga langs bij de <b>infodesk</b> van het evenement</button>
                </div>
            </center>

            @if(Auth::user() == true)
                <button type="button" class="btn btn-primary btn-lg" onclick="goBack()" style="min-width: 35%;">Terug</button> <a type="button" class="btn btn-default btn-lg" href="/home" style="min-width: 15%"><span class="fa fa-dashboard" aria-hidden="true"></span> Dashboard</a>
            @else
                <button type="button" class="btn btn-primary btn-lg" onclick="goBack()" style="min-width: 35%;">Terug</button> <a type="button" class="btn btn-default btn-lg" href="mailto://beheer@scoutroam.org" style="min-width: 15%"><span class="fa fa-envelope" aria-hidden="true"></span> Contact</a>
            @endif
            {{--<button type="button" class="btn btn-primary btn-lg" onclick="goBack()" style="min-width: 35%;">Terug</button> <button type="button" class="btn btn-default btn-lg" onclick="mailto://beheer@scoutroam.org" style="min-width: 15%;"><span class="fa fa-envelope"></span> Contact</button>--}}
        </div>
    </div>

    <script>
    function goBack() {
    window.history.back();
    }
    </script>
</html>
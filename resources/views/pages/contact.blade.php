@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/">Openbaar</a></li>
        <li class="active">Contact</li>
    </ol>
    <h1>Contact</h1>
@stop

@section('content')
    @include('includes/error')
    <h2>Contactgegevens</h2>
    <br>
    <br>
    De registratiefunctie is nog niet geactiveerd.

    @if(Auth::user()->admin === 1)
        <br><br>
        Registratieformulier a.d.v. Clients table.<br>
        Nieuwe gebruikers op 4dk.nl die registreren (in de 'users' table), krijgen een account met specifieke rechten<br>
        Via het aanmelden kan deze gebruiker zijn gegevens toevoegen aan de 'clients' table.<br>
        De FK relatie maakt deze koppeling werkend en functioneel (hoewel wel redelijk omslachtig... dingetje voor de toekomst!).
    @endif
@stop
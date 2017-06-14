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
        <div class="container-fluid">
            <h2>Netwerkplan Scoutroam 4DK-2017</h2>
            <p>Klik op de knop 'Beheren' om naar de beheer interface te gaan</p>
            <br>
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="button" class="btn btn-primary">Netwerk Topologie</button>
                <button type="button" class="btn btn-primary">Plattegrond Gebouw</button>
                <button type="button" class="btn btn-primary">Plattegrond Terrein</button>
            </div>
            <br>
            <br>
            <table class="table table-bordered" style="background-color: white">
                <thead>
                <tr>
                    <th>Device</th>
                    <th>IP</th>
                    <th>Eth</th>
                    <th>Port</th>
                    <th><-></th>
                    <th>Switch</th>
                    <th>Port</th>
                    <th>Location</th>
                    <th>Channel</th>
                    <th>MAC</th>
                    <th>DNS</th>
                    <th>DHCP</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($networks as $network)
                    <tr>
                        <td>{{ $network->device }}</td>
                        <td>{{ $network->ip }}</td>
                        <td style="text-align: right; background-color: {{ $network->colour }}"><strong>{{ $network->switch1 }}</strong></td>
                        <td style="text-align: left; background-color: {{ $network->colour }}">{{ $network->port1 }}</td>
                        <td><-></td>
                        <td style="text-align: right; background-color: {{ $network->colour }}"><strong>{{ $network->switch2 }}</strong></td>
                        <td style="text-align: left; background-color: {{ $network->colour }}">{{ $network->port2 }}</td>
                        @if($network->location == "MER")
                            <td style="text-align: center"><span class="label label-danger">MER</span></td>
                        @elseif($network->location == "KIP")
                            <td style="text-align: center"><span class="label label-warning">KIP</span></td>
                        @elseif($network->location == "VIP")
                            <td style="text-align: center"><span class="label label-success">VIP</span></td>
                        @elseif($network->location == "PK")
                            <td style="text-align: center"><span class="label label-info">PK</span></td>
                        @else
                            <td style="text-align: center"><span class="label label-primary">{{ $network->location }}</span></td>
                        @endif
                        <td>{{ $network->channel }}</td>
                        <td>{{ $network->mac }}</td>
                        <td>{{ $network->dns }}</td>
                        <td>{{ $network->dhcptype }}</td>
                        <td>
                            <a href="{{ $network->manage_url }}" target="_blank" class="btn btn-success" role="button">Beheren</a>
                            <a href="#" target="_blank" class="btn btn-primary" role="button"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                            <a href="#" target="_blank" class="btn btn-danger" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
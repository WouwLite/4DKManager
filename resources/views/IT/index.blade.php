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
            <table class="table table-bordered" style="background-color: white">
                <thead>
                <tr>
                    <th>Device</th>
                    <th>IP</th>
                    <th>Switch</th>
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
                <tr>
                    <td>{{ $networks->device }}</td>
                    <td>{{ $networks->ip }}</td>
                    <td style="text-align: right; background-color: {{ $network->colour }}"><strong>{{ $network->switch1 }}</strong></td>
                    <td style="text-align: left;">{{ $network->port2 }}</td>
                    <td><-></td>
                    <td style="text-align: right;"><strong>{{ $network->switch2 }}</strong></td>
                    <td style="text-align: left;">{{ $network->port2 }}</td>
                    <td>{{ $networks->location }}</td>
                    <td>{{ $networks->channel }}</td>
                    <td>{{ $networks->mac }}</td>
                    <td>{{ $networks->dns }}</td>
                    <td>{{ $networks->dhcptype }}</td>
                    <td>
                        <button type="button" class="btn btn-success">Manage</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">X</button>
                    </td>
                </tr>
                <tr>
                    <td>Router</td>
                    <td>10.23.2.1</td>
                    <td style="text-align: right; background-color: rgba(231, 76, 60,1.0);"><strong>101</strong></td>
                    <td style="text-align: left; background-color: rgba(231, 76, 60,1.0);"><strong>2</strong></td>
                    <td><-></td>
                    <td style="text-align: right; background-color: rgba(231, 76, 60,1.0);"><strong>901</strong></td>
                    <td style="text-align: left; background-color: rgba(231, 76, 60,1.0);"><strong>1</strong></td>
                    <td>SER</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Static</td>
                    <td>
                        <button type="button" class="btn btn-primary">Manage</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-wrench" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
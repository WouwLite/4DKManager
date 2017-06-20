@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/IT">IT</a></li>
        <li class="active">Bring Your Own Device</li>
    </ol>
    <h1>Bring Your Own Device</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="container-fluid">
            <h2>BYOD Manager 4DK-2017</h2>
            <br>
            @include('includes.IT-buttons')
            <br>
            <br>
            <table class="table table-bordered" style="background-color: white">
                <thead>
                <tr>
                    <th>Device</th>
                    <th>IP</th>
                    {{--<th>Eth</th>--}}
                    {{--<th>Port</th>--}}
                    {{--<th><-></th>--}}
                    {{--<th>Switch</th>--}}
                    {{--<th>Port</th>--}}
                    <th>Location</th>
                    <th>MAC</th>
                    <th>DHCP</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($networks as $network)
                    @if($network->byod == 1)
                    <tr>
                        <td>{{ $network->device }}</td>
                        <td>{{ $network->ip }}</td>
                        {{--<td style="text-align: right; background-color: {{ $network->colour }}"><strong>{{ $network->switch1 }}</strong></td>--}}
                        {{--<td style="text-align: left; background-color: {{ $network->colour }}">{{ $network->port1 }}</td>--}}
                        {{--<td><-></td>--}}
                        {{--<td style="text-align: right; background-color: {{ $network->colour }}"><strong>{{ $network->switch2 }}</strong></td>--}}
                        {{--<td style="text-align: left; background-color: {{ $network->colour }}">{{ $network->port2 }}</td>--}}
                        @if($network->location == "MER")
                            <td style="text-align: center"><span class="label label-danger">{{ $network->location }}</span></td>
                        @elseif($network->location == "KIP")
                            <td style="text-align: center"><span class="label label-warning">{{ $network->location }}</span></td>
                        @elseif($network->location == "VIP")
                            <td style="text-align: center"><span class="label label-success">{{ $network->location }}</span></td>
                        @elseif($network->location == "PK")
                            <td style="text-align: center"><span class="label label-info">{{ $network->location }}</span></td>
                        @else
                            <td style="text-align: center"><span class="label label-primary">{{ $network->location }}</span></td>
                        @endif
                        <td>{{ $network->mac }}</td>
                        <td>{{ $network->dhcptype }}</td>
                        <td><span class="label label-success">Goedgekeurd</span></td>
                        <td>
                            @if(!empty($network->manage_url))
                                <a href="{{ $network->manage_url }}" target="_blank" class="btn btn-success" role="button">Beheren</a>
                            @else
                                <button class="btn btn-success" role="button" disabled>Beheren</button>
                            @endif
                            <a href="#" target="_blank" class="btn btn-primary" role="button"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                            <a href="#" target="_blank" class="btn btn-danger" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop
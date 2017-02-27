@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">Clients</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>Client Overview</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Naam</th>
                    <th>Functie</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        {{--<td>{{ Auth::user()->code }}</td>--}}
                        {{--<td>{{ Auth::user()->name }}</td>--}}
                        {{--<td>{{ Auth::user()->function }}</td>--}}
                        {{--<td>{{ Auth::user()->email }}</td>--}}
                        {{--<td>{{ Auth::user()->admin }}</td>--}}
                        <td>
                            <button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container-fluid">
            <h1>Sorry u heeft geen rechten om deze pagina te bekijken! <a href="home">Ga terug</a></h1>
        </div>
    @endif
@stop
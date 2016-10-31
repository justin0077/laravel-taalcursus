@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    U bent ingelogd!
                    Vanaf hier kunt u uw systeem bekijken.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    Klik hier om naar Users te gaan.</br>
                    <td><a href="{{ url('/admin') }}"><button class="btn btn-info" type="submit">Users</button></a></td>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Pages</div>

                <div class="panel-body">
                    Klik hier om naar Pages te gaan.</br>
                    <td><a href="{{ url('/pages') }}"><button class="btn btn-info">Pages</button></a></td>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@extends('base')

@section('content')
    <style>
        .jumbotron {
            margin-top: 10%;
        }

        .container a {
            color: black;
            margin-left: 10px;
            margin-top: 4px;
        }
    </style>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 fw-900">IPT SEMIFINALS CRUD APP</h1>
        <div class="d-flex align-content-center">
        <p class="lead">Go to Destinations Tab</p>
        <a href="{{url('/destinations')}}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
    </div>
@endsection
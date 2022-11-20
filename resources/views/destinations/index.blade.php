@extends('base')

@section('content')
    <style>
        #Tablecontainer a:hover, #indexHeading a:hover{
            background-color: #bbbbbd;
            color: white;
            border-radius: 3px;
        }

        .container a{
            color: #0000;
        }

        #container {
            overflow:hidden;
            position:relative;
            margin-top: 70px;
            width: 25%;
        }

        #hideMe {
        -moz-animation: cssAnimation 1s ease-in 2s forwards;
        /* Firefox */
        -webkit-animation: cssAnimation 1s ease-in 2s forwards;
        /* Safari and Chrome */
        -o-animation: cssAnimation 1s ease-in 2s forwards;
        /* Opera */
        animation: cssAnimation 1s ease-in 2s forwards;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        }
        @keyframes cssAnimation {
            to {
                width:0;
                height:0;
                overflow:hidden;
            }
        }
        @-webkit-keyframes cssAnimation {
            to {
                width:0;
                height:0;
                visibility:hidden;
            }
        }
    </style>
    <div class="mx-auto" id='container'>
        <div id='hideMe'>
        @if($info = Session::get('info'))

        <div class="card mb-3">
            <div class="card-body bg-success text-white rounded d-flex justify-content-center">
            <a class="text-white text-center"><i class="fa-sharp fa-solid fa-check"></i></a> &nbsp;&nbsp;&nbsp;{{$info}}
            </div>
        </div>

        @endif

        </div>
    </div>
    <div class="card-body">
        <div class="container d-flex align-items-center justify-content-between" id="indexHeading">
            <h1 class="card-title text-center">Destinations</h1>
            <a class="text-dark text-decoration-none float-end h3" href="/destinations/create"><i class="fa-solid fa-square-plus"></i></a>
        </div>
    <div id="Tablecontainer">
            <table class="table table-hover shadow mb-5 rounded text-center">
            <thead class="bg-dark text-white">
                <tr>
                <th>#</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>TYPE</th>
                <th>RATING</th>
                <th class="text-center">...</th>
                </tr>
            <thead>
                @foreach($destinations as $data)
            <tbody>
                <tr>
                <td>{{$data -> id}}</td>
                <td>{{$data -> name}}</td>
                <td>{{$data -> address}}</td>
                <td>{{$data -> type}}</td>
                <td>{{$data -> rating}}</td>
                <td>
                    <a href="{{url('/destinations/' . $data->id)}}" class="text-dark text-decoration-none"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</a>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    </div>
@endsection
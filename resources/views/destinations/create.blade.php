@extends('base')

@section('content')

<div class="card mx-auto shadow" style="width: 30rem; margin-top: 5%;">
        <div class="card-body ">
            <div class="container">
                <a class="text-dark" href="{{url('/destinations')}}"><i class="fa-solid fa-arrow-left"></i></a>
                <h5 class="card-title mt-3">Create Destination</h5>
            </div>
            <div class="container row mx-auto my-3 d-flex justify-content-center">
                {!! Form::open(['url'=>'/destinations', 'method'=>'post']) !!}
                    <div class="form-group">
                        {{Form::label('name')}}
                        {{Form::text('name',null,['class'=>'form-control'])}}
                    </div>
                    <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('name')}}</div>
                    <div class="form-group">
                        {{Form::label('address')}}
                        {{Form::text('address',null,['class'=>'form-control'])}}
                    </div>
                    <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('address')}}</div>
                    <div class="form-group">
                        {{Form::label('type')}}
                        {{Form::text('type',null,['class'=>'form-control'])}}
                    </div>
                    <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('type')}}</div>
                    <div class="form-group">
                        {{Form::label('rating')}}
                        {{Form::number('rating',null,['class'=>'form-control'])}}
                    </div>
                    <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('rating')}}</div>
                    <div class="form-group d-flex justify-content-evenly mt-5">
                        <a class="btn btn-outline-danger" href="{{url('/destinations')}}"><i class="fa-solid fa-ban"></i></a>
                        <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid fa-check"></i>
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
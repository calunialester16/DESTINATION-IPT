@extends('base')

@section('content')

    <div class="card mx-auto shadow" style="width: 30rem; margin-top: 5%;">
        <div class="card-body ">
            <div class="container">
                <a class="text-dark"href="{{url('/destinations')}}"><i class="fa-solid fa-arrow-left"></i></a>
                <h5 class="card-title mt-3">Edit Destination</h5>
            </div>
            <div class="container row mx-auto my-3 d-flex justify-content-center">
                {!! Form::model($des, ['url'=>'/destinations/' . $des->id, 'method'=>'patch']) !!}
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
                        <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delModal"><i class="fa-solid fa-trash-can"></i></a>
                        <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid fa-check"></i>
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header text-white bg-danger">
                    <h1 class="modal-title fs-5 bg-danger" id="exampleModalLabel">Warning Message:</h1>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You are about to delete this destination.
                </div>
                {!! Form::open(['url', '/destinations', 'method'=>'delete'])!!}
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-warning">Proceed</button>
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection
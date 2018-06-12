@extends('layouts.app')
@section('content')
    <h1> contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
       <div class="form-group">
           {{Form::label('naam')}}
           {{Form::text('naam')}}

       </div>
    <div class="form-group">
        {{Form::label('naam')}}
        {{Form::text('naam')}}

    </div>
    <div class="form-group">
        {{Form::label('naam')}}
        {{Form::text('naam')}}
       {{Form::password('password', ['class' => 'awesome'])}}
 {{Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}
    </div>

    {!! Form::close() !!}
@endsection
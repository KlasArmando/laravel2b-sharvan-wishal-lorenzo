@extends('layouts.app')
@section('content')
    <h1> contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
       <div class="form-group">
           {{Form::text('username')}}

       </div>
    <br
    <div class="form-group">
        {{Form::text('username')}}

    </div>

    {!! Form::close() !!}
@endsection
@extends('layouts.app')
@section('blog')
    <h1><Center>Post hier je blog</Center></h1>
    {!! Form::open(['url' => 'posts.store']) !!}

    <div class="row">
            <div class="col-sm-2 col-sm-offset-2 text-center">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="" class="form-control">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="" class="form-control"> <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="" class="form-control">
        {{--{{Form::label('achternaam')}}--}}
        {{--{{Form::text('achternaam')}}--}}
        {{--{{Form::label('vraag')}}--}}
        {{--{{Form::textarea('vraag')}}--}}
        </div>
    </div>
    {{Form::submit('Verstuur Post',array('class' =>'btn btn-success btn-block', 'style' =>'margin-top'))}}
    </div>

    {!! Form::close() !!}
    @endsection



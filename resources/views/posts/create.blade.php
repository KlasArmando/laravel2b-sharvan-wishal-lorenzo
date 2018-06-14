@extends('layouts.app')
@section('titel', ' maak nieuwe post')
@section('content')
    <h1><Center>Post hier je blog</Center></h1>
    {!! Form::open(['url' => 'posts.store']) !!}

    <div class="form-group3">
        {{Form::textarea('vraag')}}

    </div>
    </div>
    {{Form::submit('Verstuur Post',array('class' =>'btn btn-success btn-block', 'style' =>'margin-top'))}}
    </div>

    {!! Form::close() !!}
    @endsection



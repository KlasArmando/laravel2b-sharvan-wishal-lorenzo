@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>;
            @endif
            <div class="posts">
     <table class="table">
        <tr>
            <th>Blog</th>
            <th>Actie</th>
        </tr>

       @foreach($posts as $post)
           <tr>
               <td> {{$post->post }} </td>

              <td> {{link_to_route('post.edit','edit',[$post->id],['class'=>'btn btn-primary'])}}
                  |delete
              </td>
           @endforeach
     </table>
    </div>
        </div>
    </div>
    {{link_to_route('post.create','Voeg nieuwe Post',null,['class'=>'btn btn-primary'])}}


    @endsection

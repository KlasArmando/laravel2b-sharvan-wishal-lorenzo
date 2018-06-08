<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{!! Form::open(['url' => 'form/store', 'method' => 'post']) !!}
{!! Form::label('naam') !!}
{!! Form::text('naam') !!}
<br>
{!! Form::label('releasedate') !!}
{!! Form::text('releasedate') !!}
<br>
{!! Form::label('company') !!}
{!! Form::text('company') !!}
<br>
{!! Form::label('price') !!}
{!! FORM::text('price') !!}
<br>
{!! Form::submit('click me') !!}
{!! Form::close() !!}

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-10 col-md-offset-1">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading"> creating data</div>--}}

{{--<form method="POST" action="{{url('console/create/')}}">--}}
{{--naam: <br>--}}
{{--<input type="text" name="naam"><br>--}}
{{--releasedate: <br>--}}
{{--<input type="text" name="releasedate"><br>--}}
{{--company: <br>--}}
{{--<input type="text" name="company"><br>--}}
{{--price: <br>--}}
{{--<input type="text" name="price"><br>--}}
{{--<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />--}}
{{--<input type="submit" name="create" value="create">--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
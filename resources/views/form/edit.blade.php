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
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> update data</div>

                <form method="POST" action="{{url('console/update/' . $consoles->id)}}">
                    naam: <br>
                    <input type="text" name="naam" value="{{$consoles->naam}}"><br>
                    releasedate: <br>
                    <input type="text" name="releasedate" value="{{$consoles->releasedate}}"><br>
                    company: <br>
                    <input type="text" name="company" value="{{$consoles->company}}"><br>
                    price: <br>
                    <input type="text" name="price" value="{{$consoles->price}}"><br>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="submit" name="edit" value="edit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
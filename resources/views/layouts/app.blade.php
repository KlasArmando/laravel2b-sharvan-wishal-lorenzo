
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<div class="container">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hoopp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;}

        .flex-center {
            align-items: center;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        @media  {

        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif


    <div class="content">
        <div class="title m-b-md">
            Hoopp
        </div>
        <header>
            <div class="links">
                @include('includes.links')
            </div>
        </header>
    <div class="hoofdimg">
        <img src="https://plancanada.ca/image/planv4/heroes/one-time-donation_lg.jpg"
    </div>
</div>
<div>
    @yield('content')
</div>



</body>
    <footer>
        @include('includes.footer')
    </footer>
</html>
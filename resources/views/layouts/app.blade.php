<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
        }

        /*.flex-center {*/
            /*align-items: center;*/
            /*display: flex;*/
            /*flex-flow: row wrap;*/
            /*justify-content: center;*/
        /*}*/
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

        .m-b-md {
            margin-bottom: 20px;
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

<div class="flex-center position-ref full-height">
{{--    @if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
    @else
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }} <span class="caret"></span>
    </a>
{{----}}
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
    </a>
{{----}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
    style="display: none;">
    @csrf
    </form>
    </div>
    </li>
    @endguest
    <div class="content">
        <div class="title m-b-md">
            Hoopp
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">home</a>
            <a href="https://laracasts.com">stem</a>
            <a href="https://laravel-news.com">aanmeldingsformulier</a>
            <a href="https://forge.laravel.com">Over ons</a>
            <a href="http://hoopp.test/contact">contact</a>
        </div>
    </div>
    <div class="hoofdimg">
        <img src="https://plancanada.ca/image/planv4/heroes/one-time-donation_lg.jpg"
    </div>
</div>

    <main class="py-4">
        @yield('blog')
    </main>
    @yield('form')

@yield('content')
</body>
</html>


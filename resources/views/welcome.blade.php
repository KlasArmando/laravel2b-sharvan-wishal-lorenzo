@extends('layouts.app')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hoopp</title>

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">--}}
{{--<style>--}}
    {{--@media screen and (min-width: 150px) and (max-width: 300px) and (orientation: portrait) {--}}
    {{--}--}}

    {{--</style>--}}
</head>
<body>
{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">home</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                    {{--</a>--}}
                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}
                {{--@guest--}}
                    {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('INLOGGEN') }}</a></li>--}}
                {{--@else--}}
                    {{--<li class="nav-item dropdown">--}}

                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('UITLOGGEN') }}--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endguest--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--Hoopp--}}
        {{--</div>--}}
        {{--<div class="header">--}}
            {{--@include('includes.links')--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="hoofdimg">--}}
        {{--<img src="https://plancanada.ca/image/planv4/heroes/one-time-donation_lg.jpg"--}}
    {{--</div>--}}
{{--</div>--}}
{{--<footer>--}}
    {{--@include('includes.footer')--}}
{{--</footer>--}}



</body>
</html>
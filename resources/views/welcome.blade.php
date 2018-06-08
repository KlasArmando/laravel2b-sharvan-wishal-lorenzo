<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        * {box-sizing: border-box;}
        body {
            margin: 0;
            font-family: Arial;
        }
        .header {
            overflow: hidden;
            background-color: #f45c42;
            padding: 20px 10px;
        }
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        .header a.active {
            background-color: dodgerblue;
            color: white;
        }
        .header-right {
            float: Left;
        }
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f45c42;
            color: black;
            text-align: Left;
            text-decoration: none;
            font-weight: normal;
        }
        a,
        a:link,
        a:visited,
        a:active{
            color: black;
            text-align: Left;
            text-decoration: none;
            font-weight: normal;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 260px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container {
            padding: 2px 16px;
        }
        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 520px;
            margin-top: -380px;
        }
        .card2:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container2 {
            padding: 2px 16px;
        }
        .card3 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 770px;
            margin-top: -380px;
        }
        .card3:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container3 {
            padding: 2px 16px;
        }
        .card4 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 1030px;
            margin-top: -380px;
        }
        .card4:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container4 {
            padding: 2px 16px;
        }
        .card5 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 260px;
            margin-top: 0px;
        }
        .card5:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container5 {
            padding: 2px 16px;
        }
        .card6 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 520px;
            margin-top: -380px;
        }
        .card6:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container6 {
            padding: 2px 16px;
        }
        .card7 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 770px;
            margin-top: -380px;
        }
        .card7:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container7 {
            padding: 2px 16px;
        }
        .card8 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 15%;
            margin: 50px;
            margin-left: 1030px;
            margin-top: -380px;
        }
        .card8:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container8 {
            padding: 2px 16px;
        }
    </style>
</head>
<body>

<div class="header">
    <a href="#" class="logo">CompanyLogo</a>
    <div class="header-right">
        <a class="active" href="#">Home</a>
        <a href="{{url('console')}}">Consoles</a>
        <a href="#">Games</a>
        <a href="#">Handheld</a>
        @if(Auth::user()['role_id'] == 2)
        @endif
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                        </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>

    </div>
</div>
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="{{asset('image/the-legend-of-zelda-breath-of-the-wild-review-onvergetelijk-106829.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{asset('image/god-of-war-review-vers-bloed-voor-kratos-129565-1.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{asset('image/index.jpg')}}" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div style="text-align: center">
    <h2>Popular items</h2>
</div>

<a href="#">
    <div class="card">
        <img src="{{asset('image/9200000073684225.jpg')}}" style="width:100%">
        <div class="container">
            <h4><b>Mario kart 8 deluxe</b></h4>
            <p>€60</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card2">
        <img src="{{asset('image/8d19ec52dea34f25b1611db2f943ff0f_Medium.png')}}" style="width:100%">
        <div class="container2">
            <h4><b>Far cry 5</b></h4>
            <p>€60</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card3">
        <img src="{{asset('image/91cygXStWYL._SX342_.jpg')}}" style="width:100%">
        <div class="container3">
            <h4><b>Fifa 18</b></h4>
            <p>€60</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card4">
        <img src="{{asset('image/1473142.jpg')}}" style="width:100%">
        <div class="container4">
            <h4><b>Nintendo switch</b></h4>
            <p>€300</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card5">
        <img src="{{asset('image/9200000059380926.jpg')}}" style="width:100%">
        <div class="container5">
            <h4><b>God of war</b></h4>
            <p>€60</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card6">
        <img src="{{asset('image/9200000088311623.jpg')}}" style="width:100%">
        <div class="container6">
            <h4><b>Dkc tropical freeze</b></h4>
            <p>€60</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card7">
        <img src="{{asset('image/ps4-pro-of-xbox-one-kopen-alle-voor-en-nadelen-op-een-rijtje-126389.jpg')}}" style="width:100%">
        <div class="container7">
            <h4><b>ps4</b></h4>
            <p>€400</p>
        </div>
    </div>
</a>

<a href="#">
    <div class="card8">
        <img src="{{asset('image/product-variety.png')}}" style="width:100%">
        <div class="container8">
            <h4><b>Nintendo labo</b></h4>
            <p>€80</p>
        </div>
    </div>
</a>

<div class="footer">
    <a href="#">Contact</a>
    &nbsp
    <a href="#">Help</a>
</div>

<script>
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>
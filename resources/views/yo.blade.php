<!doctype html>
<html lang=>
<<<<<<< Updated upstream
    <head> yo

    </head>
    <h1>
    </h1>
=======
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {display:none}
</style>
<head>
    <style>
        body{
            background-color: lightblue;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: lightcyan;
        }

        .active {
            background-color: #17a2b8;
        }

        h2{
            text-align: center;
        }

        p{
            text-align: center;
        }

    </style>
</head>
<body>

<ul>
    <li><a class="active" href="#home">Hoopp</a></li>
    <li><a href="#news">Sponsor</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">Over</a></li>
</ul>

<div class="w3-container">
    <h2>Hoopp</h2>
    <p>Elk beetje geld, telt!!!</p>
</div>

<div class="w3-content" style="max-width:800px">
    <img class="mySlides" src="http://www.robertspier.nl/hva/opkikker/images/logo.png" style="width:100%">
    <img class="mySlides" src="https://www.rodekruis.nl/wp-content/uploads/2017/05/rode-kruis-logo-transparant.png" style="width:100%">
    <img class="mySlides" src="https://www.prodicom.nl/wp-content/uploads/bfi_thumb/kika-n8znkugjjm2f0muadlqxoedhagw2ii7y8wtbivrs7c.png" style="width:100%">
</div>

<div class="w3-center">
    <div class="w3-section">
        <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
    </div>
    <button class="w3-button demo" onclick="currentDiv(1)">1</button>
    <button class="w3-button demo" onclick="currentDiv(2)">2</button>
    <button class="w3-button demo" onclick="currentDiv(3)">3</button>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-red";
    }
</script>



</body>


>>>>>>> Stashed changes
</html>

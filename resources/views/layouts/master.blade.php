
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> @yield("title") </title>
        @stack('styles')
                <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">
        <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>

    <!-- nav -->

    <div id="div1">

        <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph1">
        <a id="home" href="{{ route('index') }}"> Home </a>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="{{ route('categories') }}" role="button" data-toggle="dropdown" aria-expanded="false" id="cate">
              Category
            </a>

            <div class="dropdown-menu">

              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Cardigan.html') }}" id="car">Cardigan</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Skirts.html') }}" id="car">Skirts</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Dresses.html') }}" id="car">Dresses</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Hoodies.html') }}" id="car">Hoodies</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Blouses.html') }}" id="car">Blouses</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Sets.html') }}" id="car">Sets</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Basics.html') }}" id="car">Basics</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Pants.html') }}" id="car">Pants</a>
              <a class="dropdown-item" href="{{ asset('assets/HTML/Category Home Wear.html') }}" id="car">Home Wear</a>

            </div>
        </div>

        <a id="own" href="{{ asset('assets/HTML/Design Your Own 1.html') }}"> Design Your Own </a>
        <a id="shop" href=" {{ route('shop') }}"> Shop </a>
        <a id="cont" href="{{ route('contact') }}"> Contact </a>
        <img src="{{ asset('assets/IMG/Property 1=Vector.png') }}" id="ph600">
        <a id="log" href="{{ asset('assets/HTML/Login.html') }}"> Login </a>

    </div>



@yield('content')



<div id="div25">
    <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph25">
    <div id="div26">
        <a href="{{ route('about') }}" id="z1">About</a>
        <br>
        <a href="{{ route('categories') }}" id="z1">Categories</a>
        <br>
        <a href="{{ route('shop') }}" id="z1">Shop</a>
        <br>
        <a href="{{ route('contact') }}" id="z1">Contact</a>
    </div>
    <div id="div27">
        <a href="{{ route('user-terms') }}" id="z2">User Terms</a>
        <br>
        <a href="{{ route('privacy') }}" id="z2">Privacy</a>
        <br>
        <a href="{{ route('help') }}" id="z2">Help</a>
    </div>

    <h4 id="social" class="font-weight-bold">Social</h4>
    <div id="div28">
        <img src="{{ asset('assets/IMG/facebook (2).png') }}" id="ph26">
        <img src="{{ asset('assets/IMG/whatssapp-big-logo.png') }}" id="ph26">
        <img src="{{ asset('assets/IMG/instagram (2).png') }}" id="ph26">
    </div>
</div>

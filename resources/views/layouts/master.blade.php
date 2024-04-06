
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
        <a id="home" href="{{ asset('assets/HTML/Home.html') }}"> Home </a>

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="{{ asset('assets/HTML/Category Cardigan.html') }}" role="button" data-toggle="dropdown" aria-expanded="false" id="cate">
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
        <a id="shop" href="{{ asset('assets/HTML/New Collection.html') }}"> Shop </a>
        <a id="cont" href="{{ asset('assets/HTML/Contact.html') }}"> Contact </a>
        <img src="{{ asset('assets/IMG/Property 1=Vector.png') }}" id="ph600">
        <a id="log" href="{{ asset('assets/HTML/Login.html') }}"> Login </a>

    </div>



@yield('content')



     <!-- footer -->
     <div id="div25">
            <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph25">
            <div id="div26">
                <a href="{{ asset('assets/HTML/About.html') }}" id="z1">About</a>
                <br>
                <a href="{{ asset('assets/HTML/Category Cardigan.html') }}" id="z1">Categories</a>
                <br>
                <a id="z1" href="{{ asset('assets/HTML/') }}">Shop</a>
                <br>
                <a id="z1" href="{{ asset('assets/HTML/Contact.html') }}">Contact</a>
            </div>
            <div id="div27">
                <a href="{{ asset('assets/HTML/User Terms.html') }}" id="z2">User Terms</a>
                <br>
                <a href="{{ asset('assets/HTML/Privacy.html') }}" id="z2">Privacy</a>
                <br>
                <a href="{{ asset('assets/HTML/Help.html') }}" id="z2">Help</a>
            </div>

            <h4 id="social" class="font-weight-bold">Social</h4>
            <div id="div28">
                <img src="{{ asset('assets/IMG/facebook (2).png') }}" id="ph26">
                <img src="{{ asset('assets/IMG/whatssapp-big-logo.png') }}" id="ph26">
                <img src="{{ asset('assets/IMG/instagram (2).png') }}" id="ph26">
            </div>
        </div>

    </body>
</html>


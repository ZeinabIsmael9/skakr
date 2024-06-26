
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> @yield("title") </title>
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('assets/CSS/nav.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/CSS/footer.css') }}"/>
{{--            <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <style>
            .text-primary {
                color: #DB7575 !important;
            }
        </style>
    </head>

<body class="home">

    <!-- nav -->
    <section class="nav__bar">
        <nav  class="main__navbar container">
            {{-- logo --}}
            <div class="logo__container">
                <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph1">
            </div>

            {{-- menu --}}
            <div class="nav__menu">
            <a id="home" href="{{ route('index') }}"> Home </a>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="{{ route('categories', ['categoryId' => 1]) }}" role="button" data-toggle="dropdown" aria-expanded="false" id="cate">
                    Category
                </a>

                <div class="dropdown-menu">
                    @foreach(\App\Models\Category::all() as $category)
                        <a class="dropdown-item" href="{{ route('categories', ['categoryId' => $category->id]) }}" id="car">{{ $category->name }}</a>

                    @endforeach
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Cardigan</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Skirts</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Dresses</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Hoodies</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Blouses</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}"id="car">Sets</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Basics</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Pants</a>--}}
{{--                  <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Home Wear</a>--}}

                </div>
            </div>
            <a id="own" href="{{ route('create-your-piece') }}"> Design Your Own </a>
            <a id="shop" href=" {{ route('shop') }}"> Shop </a>
            <a id="cont" href="{{ route('contact') }}"> Contact </a>
            </div>

            {{-- icons --}}
            <div class="icons__container">
                <img src="{{ asset('assets/IMG/Property 1=Vector.png') }}" id="ph600">
                @if(Auth::check())
                    <a href="{{route('shopping-cart')}}"> <img src="{{ asset('assets/IMG/Group 46.png') }}" id="ph46"> </a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button id="log" href="{{ route('logout') }}"> logout </button>
                    </form>
                @else
                    <a id="log" href="{{ route('login') }}"> Login </a>
                    <a id="log" href="{{ route('register') }}"> Register </a>
                @endif


            </div>
        </nav>
    </section>

{{--    <nav id="div1" class="">--}}

{{--        <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph1">--}}
{{--        <a id="home" href="{{ route('index') }}"> Home </a>--}}
{{--        <div class="dropdown">--}}
{{--            <a class="btn btn-secondary dropdown-toggle" href="{{ route('categories', ['categoryId' => 1]) }}" role="button" data-toggle="dropdown" aria-expanded="false" id="cate">--}}
{{--                Category--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu">--}}

{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Cardigan</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Skirts</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Dresses</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Hoodies</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Blouses</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}"id="car">Sets</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Basics</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 1]) }}" id="car">Pants</a>--}}
{{--              <a class="dropdown-item" href="{{ route('categories', ['categoryId' => 2]) }}" id="car">Home Wear</a>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <a id="own" href="{{route('create-your-piece')}}"> Design Your Own </a>--}}
{{--        <a id="shop" href=" {{ route('shop') }}"> Shop </a>--}}
{{--        <a id="cont" href="{{ route('contact') }}"> Contact </a>--}}
{{--        <img src="{{ asset('assets/IMG/Property 1=Vector.png') }}" id="ph600">--}}
{{--        <a id="log" href="{{ route('login') }}"> Login </a>--}}
{{--        <a id="log" href="{{ route('register') }}"> Register </a>--}}

{{--    </nav>--}}



@yield('content')



<div id="div25">
    <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png') }}" id="ph25">
    <div id="div26">
        <a href="{{ route('about') }}" id="z1">About</a>
        <br>
        <a href="{{ route('categories', ['categoryId' => 1]) }}" id="z1">Categories</a>
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
        <a href="https://www.facebook.com/share/fWi4B9mVr3CEMjgb/?mibextid=qi2Omg"><img src="{{ asset('assets/IMG/facebook (2).png') }}" id="ph26"></a>
        <a href="https://wa.me/201016319138"><img src="{{ asset('assets/IMG/whatssapp-big-logo.png') }}" id="ph26"></a>
        <a href="https://www.instagram.com/skakr713?igsh=MW56dWV3N3VmNHQxbg=="><img src="{{ asset('assets/IMG/instagram (2).png') }}" id="ph26"></a>
    </div>
</div>
@stack('scripts')

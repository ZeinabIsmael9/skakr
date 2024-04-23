@extends('layouts.master')
    @section('content')
    <title> About </title>
        <link rel="stylesheet" href="{{ asset('assets/CSS/About.CSS')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- body 1 -->
        <img src="{{ asset('assets/IMG/t (1).png')}}" id="ph2">
        <img src="{{ asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png')}}" id="ph3">
        <h1 id="style" class="font-weight-bold">Your Style, Your Creation</h1>
        <p id="wel">Welcome to Skakr, <span style="display: block;"></span> where fashion meets individuality. <span style="display: block;"></span> We are a cutting-edge fashion brand that <span style="display: block;"></span> empowers you to unleash your creativity and <span style="display: block;"></span> design your own unique garments.</p>
        <img src="{{ asset('assets/IMG/t (2).png')}}" id="ph4">

        <!-- body 2 -->

        <img src="{{ asset('assets/IMG/t (3).png')}}" id="ph5">
        <p id="our">Our brand is built on the foundation of innovation, craftsmanship, <span style="display: block;"></span> and self-expression. <span style="display: block;"></span> We understand that each individual has a distinct style and <span style="display: block;"></span> personality</p>
        <p id="cater">Skakr is here to cater to your individual taste and <span style="display: block;"></span> preferences.</p>
        
        <a href="{{route('create-your-piece')}}">

            <button id="vd">TRY IT</button>

        </a>
        <p id="power">With Skakr, the power to design your <span style="display: block;"></span> own item rests in your hands</p>
        <img src="{{ asset('assets/IMG/t (5).png')}}" id="ph6">
        <img src="{{ asset('assets/IMG/t (4).png')}}" id="ph7">
        <p id="world"> <a href="{{route('register')}}" id="np">Join Us</a> in the world of Skakr, where you can turn your fashion dreams into reality. <span style="display: block;"></span> Experience the joy of designing your own garments and be part of a movement that <span style="display: block;"></span> celebrates uniqueness. <span style="display: block;"></span> We invite you to <a href="{{route('shop')}}" id="np"> explore our collection </a> , unleash your creativity, and express <span style="display: block;"></span> yourself through fashion like never before.</p>
@endsection

@extends('layouts.master')
    @section('content')
    <div class="row">
        <title> Contact </title>
        <link rel="stylesheet" href="{{ asset('assets/CSS/Contact.CSS')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </div>
        <!-- body 1 -->
        <h1 id="get">lET’S GET IN <span style="display: block;"></span> TOUCH</h1>
        <p id="love">We would love to hear from you! If you have any <span style="display: block;"></span>questions, comments, or feedback, please don't hesitate to <span style="display: block;"></span> get in touch with us. <span style="display: block;"></span> Our team is here to assist you and provide the <span style="display: block;"></span> information you need</p>
        <form method="POST" action="{{ route('contact.post') }}">
            @csrf
            <input type="text" placeholder="Name" id="name" name="name">
            <br>
            <input type="email" placeholder="Email" id="email" name="email">
            <br>
            <input type="text" placeholder="Phone Number" id="num" name="phone_number">
            <br>
        <div id="div2">
            <input type="text" placeholder="How We Can Help!" id="text" name="text">

            <button type="submit" id="vd">SEND</button>
        </div>
        </form>
        <img src="{{ asset('assets/IMG/Group 70.png')}}" id="ph2">
        @endsection

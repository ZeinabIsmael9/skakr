@extends('layouts.master')
    @section('content')
    
    <meta charset="utf-8"/>
    <title> Client Data </title>
    <link rel="stylesheet" href="{{ asset('assets/CSS/Client Data.CSS')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- body 1 -->


        <div id="div3">
            <h1 id="che"> Confirm Order & Checkout </h1>

            <input type="text" placeholder="Full Name" id="full">
            <input type="text" placeholder="Country" id="coun">
            <br>
            <input type="text" placeholder="Address" id="add">
            <br>
            <div id="div2">
            <input type="text" placeholder="Street Name & House Number" id="street">

            <div class="dropdown">

                <button class=" dropdown-toggle" type="input" data-toggle="dropdown" aria-expanded="false" id="city">
                city
                </button>
            
            </div>
            </div>

            <br>
            <input type="number" placeholder="Phone Number 1" id="num1">
            <br>
            <input type="number" placeholder="Phone Number 2" id="num2">
            <br>


            <a href="../HTML/Received.html">

                <button id="vd">Confirm</button>

            </a>



        <!-- body 2 -->


       <div id="div60">          
          <img src="{{ asset('assets/IMG/lm (2).png')}}" id="ph51">
          <p id="duct">Product Name</p>
          <p id="l2">1200LE</p>



         <img src="{{ asset('assets/IMG/lm (1).png')}}" id="ph51">
         <p id="duct">Product Name</p>
         <p id="l2">600LE</p>




         <p id="Subtotal">Subtotal</p>
         <p id="l8">1800LE</p>
         <br>
         <p id="ship">Shipping</p>
         <p id="l7">70LE</p>
         <br>
         <p id="total">Total</p>
         <p id="l1">1683LE</p>
         <del id="l0">1870LE</del>
    

        </div>
        @endsection
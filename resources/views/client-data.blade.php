@extends('layouts.master')
@section('content')
    <meta charset="utf-8"/>
    <title> Client Data </title>
    <link rel="stylesheet" href="{{ asset('assets/CSS/Client Data.CSS')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- body 1 -->
    <!-- form.blade.php -->
    
    <div id="div3">
        <h1 id="che"> Confirm Order & Checkout </h1>
    <form action="{{ route('client-data.store') }}" method="post">
        @csrf
        <input type="text" placeholder="Full Name" name="full_name" id="full" required>
        <input type="text" placeholder="Country" name="country" id="coun">
        <br>
        <input type="text" placeholder="Address" name="address"  id="add">
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
        <input type="tel" placeholder="Phone Number 1"id="num1" name="phone_number_1" required>
        <br>
        <input type="tel" placeholder="Phone Number 2" name="phone_number_2" id="num2">
        <br>
        <button type="submit" id="vd"> Confirm </button>
    </form>
    

    <!-- body 2 -->
   <!-- details.blade.php -->
<div>
    <div id="div60">
@if(isset($cart) && $cart->isNotEmpty())
@foreach($cart as $cartItem)
        <img src="{{ $cartItem->item->getImageUrl() }}"  id="ph51">
        <p id="duct">{{ $cartItem->item->name }}</p>
        <p id="l2">{{ $cartItem->item->price }}LE</p>
@endforeach
@else
<p>No items in the cart.</p>
@endif
<p id="Subtotal">Subtotal</p>
<p id="l8">{{ $subTotal }}LE</p>
<br>
<p id="ship">Shipping</p>
<p id="l7">{{ $shipping }}LE</p>
<br>
<p id="total">Total</p>
<p id="l1">{{ $total }}LE</p>
<del id="l0">{{ $subTotal }}LE</del>
</div>
</div>
@endsection

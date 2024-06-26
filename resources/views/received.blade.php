@extends('layouts.master')
@section('content')
<title> Received </title>
<link rel="stylesheet" href="{{ asset('assets/CSS/Received.CSS')}}"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<h2 id="thank"> Thank You. Your Order Has Been Received </h2>

<div id="div2">
    <div id="div3">
        <p id="date">Date</p>
        <p id="total">Total</p>
        <p id="pay">Payment Method</p>
    </div>

    <div id="div4">
        <p id="mar">{{ $order->updated_at->format('F j, Y') }}</p>
        <h3 id="l3" class="font-weight-bold">{{ $order->total }}LE</h3>
        <p id="cash">{{ $paymentMethod }}</p>
    </div>
</div>

<h3 id="order">Order Details</h3>

<div id="div5">
    @foreach($order->orderDetails as $orderDetail)
        <div id="div6">
            <p id="pro">{{ $orderDetail->item?$orderDetail->item->product->name:'cutom desgin' }} </p>
            <p id="x2">x {{$orderDetail->quantity}} </p>
        </div>
        <h3 id="le1">{{ $orderDetail->amount }} LE</h3>
    @endforeach
</div>
@endsection


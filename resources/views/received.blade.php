@extends('layouts.master')
@section('content')
<title> Received </title>
    <link rel="stylesheet" href="{{ asset('assets/CSS/Received.CSS')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <h2 id="thank">Thank You. Your Order Has Been Received</h2>

    <div id="div2">
        <div id="div3">
            <p id="date">Date</p>
            <p id="total">Total</p>
            <p id="pay">Payment Method</p>
        </div>
    
        <div id="div4">
            <p id="mar">{{ $date }}</p> <!-- تاريخ اليوم -->
            <h3 id="l3" class="font-weight-bold">{{ $total }}LE</h3> <!-- إجمالي الطلب -->
            <p id="cash">{{ $paymentMethod }}</p> <!-- طريقة الدفع -->
            <p>Product: {{ $product->name }}</p> <!-- اسم المنتج -->
            <p>Price: {{ $product->price }}LE</p> <!-- سعر المنتج -->
        </div>
    </div>

        <!-- body 2 -->


        {{-- <h3 id="order">Order Details</h3>

        <div id="div5">
            
            <div id="div6">
                <p id="pro">Product Name</p>
                <p id="x2">x2</p>
            </div>

            <h3 id="le1">1200LE</h3>

            <div id="div6">
                <p id="name1">Product Name</p>
                <p id="x1">x1</p>
            </div>

            <h3 id="le2">600LE</h3>

        </div> --}}


@endsection
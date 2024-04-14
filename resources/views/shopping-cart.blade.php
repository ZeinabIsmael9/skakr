@extends('layouts.master')
@section('title', 'cart')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/CSS/Shopping Card.CSS')}}"/>
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">--}}
@endpush
@section('content')

    <div class="row" id="div62">
        <div class="col-md-6">

            <div id="div2">

                <p id="cart">CART TOTALS</p>
                <h4 id="code">Discount Code</h4>
                <div id="div3">
                    <p id="tot">Toooot</p>
                </div>
                <div id="div4">

                    <div id="div5">
                        <p id="sub">Subtotal:</p>
                        <p id="l8">1800LE</p>
                    </div>


                    <div id="div6">
                        <p id="shi">Shipping:</p>
                        <p id="l7">70LE</p>
                    </div>


                    <div id="div7">
                        <p id="dis">Discount:</p>
                        <p id="l1">187LE</p>
                    </div>

                </div>

                <div id="div8">

                    <div id="div9">
                        <p id="total">Total:</p>
                        <p id="l6">1683LE</p>
                    </div>

                </div>

                <a href="../HTML/Client Data.html">

                    <button id="login">Order</button>

                </a>

            </div>

        </div>


        <div class="col-md-6">

            <div id="div10">

                <p id="pro">Product</p>
                <p id="pri">Price</p>
                <p id="qua">QUANTITY</p>
                <p id="subtotal">SUBTOTAL</p>

            </div>

            <div id="div11">

                <img src="../IMG/lm (1).png" id="ph12">


                <p id="product">Product</p>
                <p id="name">Name</p>

                <h4 id="l0" class="font-weight-bold">600LE</h4>

                <button class="plus_minus btn" id="table">+</button>
                <span class="number btn" id="tablee">1</span>
                <button class="minus_plus btn" id="ta">-</button>

                <h4 id="l2" class="font-weight-bold">600LE</h4>

                <div id="div61">
                    <img src="../IMG/x.png" id="ph52">
                </div>

            </div>


            <div id="div11">

                <img src="../IMG/lm (2).png" id="ph12">


                <p id="product">Product</p>
                <p id="name">Name</p>

                <h4 id="l0" class="font-weight-bold">600LE</h4>


                <button class="plus_minus1 btn" id="table">+</button>
                <span class="number1 btn" id="tablee">2</span>
                <button class="minus_plus1 btn" id="ta">-</button>


                <h4 id="l2" class="font-weight-bold">1200LE</h4>

                <div id="div61">
                    <img src="../IMG/x.png" id="ph52">
                </div>

            </div>

        </div>


    </div>

@endsection
@push('scripts')
    <script>
        const plus = document.querySelector('.plus_minus'),
            minus = document.querySelector('.minus_plus');

        let number_el = document.querySelector('.number');

        plus.addEventListener('click', () => {
            let val = parseInt(number_el.innerText);
            number_el.innerText = ++val;
        });

        minus.addEventListener('click', () => {
            let val = parseInt(number_el.innerText);
            number_el.innerText = --val;
        });




        const plus1 = document.querySelector('.plus_minus1'),
            minus1 = document.querySelector('.minus_plus1');

        let number_el1 = document.querySelector('.number1');

        plus1.addEventListener('click', () => {
            let val1 = parseInt(number_el1.innerText);
            number_el1.innerText = ++val1;
        });

        minus1.addEventListener('click', () => {
            let val1 = parseInt(number_el1.innerText);
            number_el1.innerText = --val1;
        });

    </script>


@endpush

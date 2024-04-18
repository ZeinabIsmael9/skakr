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
                    <p id="tot"></p>
                </div>
                <div id="div4">

                    <div id="div5">
                        <p id="sub">Subtotal:</p>
                        <p id="l8">{{$subTotal}}LE</p>
                    </div>


                    <div id="div6">
                        <p id="shi">Shipping:</p>
                        <p id="l7">{{$shipping}}LE</p>
                    </div>


                    <div id="div7">
                        <p id="dis">Discount:</p>
                        <p id="l1">{{$discount}}LE</p>
                    </div>

                </div>

                <div id="div8">

                    <div id="div9">
                        <p id="total">Total:</p>
                        <p id="l6">{{$total}}LE</p>
                    </div>

                </div>

                <form method="POST" action="{{ route('order') }}">
                    @csrf
                    <button type="submit" id="login">Order</button>
                </form>

            </div>

        </div>


        <div class="col-md-6">

            <div id="div10">

                <p id="pro">Product</p>
                <p id="pri">Price</p>
                <p id="qua">QUANTITY</p>
                <p id="subtotal">SUBTOTAL</p>

            </div>
            @foreach($cart as $cartItem)
                <div id="div11">

                    <img src="{{$cartItem->item->getImageUrl()}}" id="ph12">


                    <p id="product">Product</p>
                    <p id="name">Name</p>

                    <h4 id="l0" class="font-weight-bold">{{($cartItem->item->price )}}LE</h4>

                    <form method="GET" action="{{ route('add-item-to-cart', $cartItem->item->id) }}">
{{--                        @csrf--}}
                        <button class="plus_minus btn" id="table">+</button>
                    </form>
{{--                    <button class="plus_minus btn" id="table">+</button>--}}
                    <span class="number btn" id="tablee">{{($cartItem->quantity)}}</span>
{{--                    <button class="minus_plus btn" id="ta">-</button>--}}
                    <form method="GET" action="{{ route('subtract-item-from-cart', $cartItem->item->id) }}">
{{--                        @csrf--}}
                                            <button class="minus_plus btn" id="ta">-</button>
                    </form>

                    <h4 id="l2" class="font-weight-bold">{{($cartItem->item->price * $cartItem->quantity)}}LE</h4>

                    <div id="div61">
                        <img src="../IMG/x.png" id="ph52">
                    </div>

                </div>
            @endforeach

        </div>


    </div>

@endsection
@push('scripts')
{{--    <script>--}}
{{--        const plus = document.querySelector('.plus_minus'),--}}
{{--            minus = document.querySelector('.minus_plus');--}}

{{--        let number_el = document.querySelector('.number');--}}

{{--        plus.addEventListener('click', () => {--}}
{{--            let val = parseInt(number_el.innerText);--}}
{{--            number_el.innerText = ++val;--}}
{{--        });--}}

{{--        minus.addEventListener('click', () => {--}}
{{--            let val = parseInt(number_el.innerText);--}}
{{--            number_el.innerText = --val;--}}
{{--        });--}}


{{--        const plus1 = document.querySelector('.plus_minus1'),--}}
{{--            minus1 = document.querySelector('.minus_plus1');--}}

{{--        let number_el1 = document.querySelector('.number1');--}}

{{--        plus1.addEventListener('click', () => {--}}
{{--            let val1 = parseInt(number_el1.innerText);--}}
{{--            number_el1.innerText = ++val1;--}}
{{--        });--}}

{{--        minus1.addEventListener('click', () => {--}}
{{--            let val1 = parseInt(number_el1.innerText);--}}
{{--            number_el1.innerText = --val1;--}}
{{--        });--}}

{{--    </script>--}}

@endpush

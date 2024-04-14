@extends('layouts.master')
@push('styles')
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('assets/CSS/Design Your Own 2.CSS')}}"/>

@endpush
@section('title', 'New Collection')

@section('content')
     <!-- body 1 -->


     <div class="row" style="margin: 0 0 0 0;">
        <div class="col-md-6">
            <div id="div2">

                <img src="{{ asset('assets/IMG/Vector 5.png')}}" id="ph2">

            </div>

            <div id="div3">
                <p id="sub">Subtotal</p>
                <p id="l3">300LE</p>
            </div>

            
            <a href="../HTML/Payment Details.html">

                <button id="vd">Order</button>

            </a>
            <br>

            <img src="{{ asset('assets/IMG/Group 107.png')}}" id="ph3">

        </div>










        <div class="col-md-6">

            <div id="div5">

                <img src="{{ asset('assets/IMG/rrrrr.png')}}" id="ph4">
                <h1 id="down" class="font-weight-bold">Download Your Design</h1>

            </div>


            <div id="div4">
                <h6 id="sha">Dress Shape</h6>
            </div>

            <div id="div6">

                <div id="div7">

                    <img src="{{ asset('assets/IMG/o (1).png')}}">
                    <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph5">
                    <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph5">
                    <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph5">
                    <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph5">

                </div>


                <div id="div8">

                    <p id="shap">Shape</p>
                    <img src="{{ asset('assets/IMG/p (2).png')}}" id="ph6">
                    <img src="{{ asset('assets/IMG/p (3).png')}}" id="ph7">
                    <img src="{{ asset('assets/IMG/p (4).png')}}" id="ph8">
                    <img src="{{ asset('assets/IMG/p (5).png')}}" id="ph9">
                    <img src="{{ asset('assets/IMG/p (1).png')}}" id="ph10">

                </div>


                <div id="div9">

                    <img src="{{ asset('assets/IMG/o (1).png')}}" id="ph11">
                    <p id="size">Regular Size Price</p>
                    <p id="l1">340LE</p>
                    <p id="l2">330LE</p>
                    <p id="l6">330LE</p>
                    <p id="l4">300LE</p>
                    <p id="l5">310LE</p>                                      

                </div>


                <div id="div9">

                    <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph11">
                    <p id="size">Plus Size Price</p>
                    <p id="l7">240LE</p>
                    <p id="l8">230LE</p>
                    <p id="l9">230LE</p>
                    <p id="l10">200LE</p>
                    <p id="l11">210LE</p>                                      

                </div>

            </div>








            <div id="div10">
                <h6 id="mat">Material</h6>
            </div>


            <div id="div11">

                <img src="{{ asset('assets/IMG/o (1).png')}}" id="ph13">
                <br>
                <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph13">
                <br>
                <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph13">
                <br>
                <img src="{{ asset('assets/IMG/o (2).png')}}" id="ph13">

                <h4 id="cot">Cotton</h4>
                <h4 id="sio">Siobhan’s</h4>
                <h4 id="lin">Linen</h4>
                <h4 id="lac">Lace</h4>

                <p id="r">R.Size</p>
                <p id="r2">60</p>
                <p id="r3">60</p>
                <p id="r4">60</p>
                <p id="r5">60</p>

                <div id="div12">

                    <p id="si">+Size</p>
                    <p id="r6">60</p>
                    <p id="r7">60</p>
                    <p id="r8">60</p>
                    <p id="r9">60</p>
                 
                </div>

            </div>



            <div id="div13">
                <h6 id="color">Color</h6>
            </div>

            <div id="div14">

                <img src="{{ asset('assets/IMG/لون 1.png')}}" id="lon1">
                <img src="{{ asset('assets/IMG/لون 2.png')}}" id="lon1">
                <img src="{{ asset('assets/IMG/لون 3.png')}}" id="lon1">

            </div>

            <div id="div15">

                <img src="{{ asset('assets/IMG/rrrrr.png')}}" id="ph12">
                <h1 id="print" class="font-weight-bold">Download Print</h1>

            </div>

        </div>

    </div>



@endsection

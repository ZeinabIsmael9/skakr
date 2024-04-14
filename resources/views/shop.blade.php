@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/CSS/New Collection.CSS')}}"/>
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">--}}


{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>--}}

@endpush
@section('title', 'New Collection')

@section('content')

    <!-- body 2-->


    <div class="row" id="div56" class="shop">

        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach

        <div class="col-md-3">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc.png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        {{--    <div class="col-md-3">--}}
        {{--        @foreach($products as $product)--}}
        {{--        @endforeach--}}
        {{--        <div class="card" id="div55">--}}
        {{--            <img src="{{ asset('assets/IMG/ff (9).png')}}" class="card-img-top" alt="..." id="ph50">--}}
        {{--            <div class="card-body">--}}
        {{--              <p class="card-title" id="pro">Product Name</p>--}}

        {{--              <div id="div48">--}}
        {{--                <div id="div49"></div>--}}
        {{--                <div id="div50"></div>--}}
        {{--                <div id="div51"></div>--}}
        {{--                <div id="div52" style="background-color: brown;"></div>--}}
        {{--              </div>--}}

        {{--              <div id="div53">--}}

        {{--    <div class="col-md-3">--}}
        {{--        @foreach($products as $product)--}}
        {{--            <x-product-card :product="$product" />--}}
        {{--        @endforeach--}}
        {{--        <div class="card" id="div55">--}}
        {{--            <img src="{{ asset('assets/IMG/ff (9).png')}}" class="card-img-top" alt="..." id="ph50">--}}
        {{--            <div class="card-body">--}}
        {{--              <p class="card-title" id="pro">Product Name</p>--}}

        {{--              <div id="div48">--}}
        {{--                <div id="div49"></div>--}}
        {{--                <div id="div50"></div>--}}
        {{--                <div id="div51"></div>--}}
        {{--                <div id="div52" style="background-color: brown;"></div>--}}
        {{--              </div>--}}

        {{--              <div id="div53">--}}
        {{--                <img src="{{ asset('assets/IMG/Star 5.png')}}">--}}
        {{--                <img src="{{ asset('assets/IMG/Star 5.png')}}">--}}
        {{--                <img src="{{ asset('assets/IMG/Star 5.png')}}">--}}
        {{--                <img src="{{ asset('assets/IMG/Star 5.png')}}">--}}
        {{--                <img src="{{ asset('assets/IMG/Star 5.png')}}">--}}
        {{--              </div>--}}


        {{--              <div id="div54">--}}
        {{--                <h3 id="l6">600LE</h3>--}}
        {{--                <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">--}}
        {{--              </div>--}}


        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}


        <div class="col-md-3">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc (3).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: blue;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/i (5).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color:blueviolet;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc (5).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: darkgray;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/vb (2).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: cornflowerblue;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc (7).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: darkgreen;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/uu (12).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: darkgoldenrod;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc (9).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: orange;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/t (5).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: dodgerblue;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/cc (11).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: violet;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-3" id="div57">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/hh (4).png')}}" class="card-img-top" alt="..." id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: steelblue;"></div>
                    </div>

                    <div id="div53">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                        <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    </div>


                    <div id="div54">
                        <h3 id="l6">600LE</h3>
                        <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                    </div>


                </div>
            </div>
        </div>

    </div>

@endsection

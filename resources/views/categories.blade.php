@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/CSS/Category Cardigan.CSS')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>
@endpush

@section('title', 'categories')

@section('content')

    <!-- body 1 -->

    <div id="div47">
        {{--                            @if({{ \Illuminate\Http\Request::is('categories/1')  }})--}}
        {{--                <a href="{{ route('categories', ['categoryId' => 1]) }}" id="gan">'ssssssss'</a>--}}

        {{--                            @else--}}
        {{--                            @endif--}}
        @foreach ($categories as $category)
            {{--                color: #A6A6A6;--}}
            @if( ! \request()->is("*/".$category->id))
                <a style="color: #A6A6A6" href="{{ route('categories', ['categoryId' => $category->id]) }}"
                   id="gan">{{$category->name}}</a>
            @else
                <span href="{{ route('categories', ['categoryId' => $category->id]) }}"
                      id="gan">{{$category->name}}</span>

            @endif
        @endforeach


    </div>



    <!-- body 2-->


    <div class="row" id="div56">
        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach


        <div class="col-md-3">

            <div class="card" id="div55">
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47 (2).png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47 (3).png')}}" class="card-img-top" alt="..."
                     id="ph50">
                <div class="card-body">
                    <p class="card-title" id="pro">Product Name</p>

                    <div id="div48">
                        <div id="div49"></div>
                        <div id="div50"></div>
                        <div id="div51"></div>
                        <div id="div52" style="background-color: brown;"></div>
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
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47 (4).png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47 (5).png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47 (6).png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/photo_2024-03-20_13-47-47.png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/WhatsApp Image 2024-03-21 at 01.58.07_e71b0aca.png')}}"
                     class="card-img-top" alt="..." id="ph50">
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
                <img src="{{ asset('assets/IMG/WhatsApp Image 2024-03-21 at 01.58.07_6343a9e4.png')}}"
                     class="card-img-top" alt="..." id="ph50">
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
                <img src="{{ asset('assets/IMG/WhatsApp Image 2024-03-21 at 01.58.07_7025ca0d.png')}}"
                     class="card-img-top" alt="..." id="ph50">
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
                <img src="{{ asset('assets/IMG/photo_2021-12-16_18-37-33.png')}}" class="card-img-top" alt="..."
                     id="ph50">
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
                <img src="{{ asset('assets/IMG/WhatsApp Image 2024-03-21 at 01.58.07_74d93c71.png')}}"
                     class="card-img-top" alt="..." id="ph50">
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
                <img src="{{ asset('assets/IMG/WhatsApp Image 2024-03-21 at 01.58.07_f6b03236.png')}}"
                     class="card-img-top" alt="..." id="ph50">
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

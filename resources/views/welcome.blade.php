@extends('layouts.master')
    @section('content')
        @push('styles')
            <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">
            <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>

        @endpush
        <!--body 1-->
        <div>

            <img src="{{ asset('assets/IMG/e (1).png') }}" id="ph2">
            <div id="div2">
                <p id="RIGHT"> A PLACE TO CHOOSE <span style="display: block;"></span> YOUR RIGHT </p>
                <p id="FASHION"> FASHION </p>

                <a id="div3" href="#div7">
                    <div id="div4">

                        <p id="ex">Explore</p>
                        <div id="div5">
                            <div id="div6">

                                <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph3">
                                <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph4">

                            </div>

                        </div>

                    </div>

                </a>

            </div>

        </div>




        <!-- body 2 -->
        <div id="div7">

            <h1 id="trend">Trending Now</h1>

            <div class="row" style="margin: 0 0 0 0;">
                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (7).png') }}" id="ph5">
                </div>

                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (8).png') }}" id="ph6">
                </div>

                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (9).png') }}" id="ph7">
                </div>

                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (2).png') }}" id="ph8">
                </div>

                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (5).png') }}" id="ph9">
                </div>

                <div class="col-md-2">
                    <img src="{{ asset('assets/IMG/e (6).png') }}" id="ph10">
                </div>

                <div class="col-md-2">
                    <div id="div13">
                        <div id="div14">
                            <a href="{{ route('trending') }}" id="view">View All</a>
                            <div id="div15">
                                <div id="div16">
                                    <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph15">
                                    <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph16">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- body 3 -->
        <div class="row" style="margin: 0 0 0 0;">
            <div class="col-md-6">
                <img src="{{ asset('assets/IMG/Rectangle 54.png') }}" id="ph11">
                <img src="{{ asset('assets/IMG/e (3).png') }}" id="ph12">
            </div>

            <div class="col-md-6">
                <h1 id="ramadan" class="font-weight-bold">Ramadan Collection</h1>
                <div id="div9">
                    <div id="div10">
                        <a id="exp" href="{{ route('shop') }}">Shop Now</a>
                        <div id="div11">
                            <div id="div12">
                                <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph13">
                                <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph14">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- body 4 -->
        <div id="div17">
            <h1 id="make" class="font-weight-bold">let's make your <span style="display: block;"></span> clothing style </h1>
            <div id="div18">
                <div id="div19">
                    <a id="go" href="{{ route('create-your-piece') }}">Let's Go</a>
                    <div id="div20">
                        <div id="div21">
                            <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph18">
                            <img src="{{ asset('assets/IMG/Polygon 4.png') }}" id="ph19">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- body 5 -->
        <div id="div22">
            <div id="div1000">
                <h1 id="arr">New Arrival</h1>
                <a id="se" href="{{ route('shop') }}">See All</a>
            </div>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($newArrivals->chunk(4) as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row" id="row1">
                                @foreach($chunk as $product)
                                    <div class="col-md-3">
                                        <div id="div23">
                                            <p id="pro">{{ $product->name }}</p>
                                            <h4 id="le">{{ $product->firstItem->price }}LE</h4>
                                            <a class="btn" href="{{ route('add-item-to-cart', $product->id) }}" id="add">Add To Bag</a>
                                        </div>
                                        <img src="{{ asset($product->firstItem->getImageUrl()) }}" id="ph21">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- body 6 -->



                      <div id="div700">
                          <h4 id="categories"> Categories </h4>
                          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                  @foreach($categories->chunk(4) as $chunk)
                                      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                          <div class="row" id="row2">
                                              @foreach($chunk as $category)
                                                  <a href="{{ route('categories', $category->id) }}">
                                                      <div class="col-md-3">
                                                            <img src="{{ asset($category->firstItemInFirstProduct->getImageUrl()) }}" id="ph22">
                                                          <div id="div24">
                                                              <p id="ho">{{ $category->name }}</p>
                                                              <img src="{{asset('assets/IMG/icon.png')}}" id="icon1">
                                                          </div>
                                                      </div>

                                                  </a>
                                              @endforeach
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>



    @endsection

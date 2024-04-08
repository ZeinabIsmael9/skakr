@extends('layouts.master')
    @section('content')
        
    <title> Item Detail </title>
        <link rel="stylesheet" href="{{ asset('assets/CSS/Item Detail.CSS')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- body 2 -->


        <div class="row" style="margin: 0 0 0 0;">
            <div class="col-md-6">

                <div id="div62">
                    <h5> Home </h5>
                    <h5> > </h5>
                    <h5> Category </h5>
                    <h5> > </h5>
                    <h5> Cardigan </h5>
                    <h5> > </h5>
                    <h5> Item Name </h5>
                </div>


                <h1 id="denim">Denim Trench</h1>

                <h1 id="l60">600LE</h1>


                <div id="div63">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                </div>


                <p id="color"> Color </p>
                <img src="{{ asset('assets/IMG/الوان.png')}}" id="ph53">


                <p id="size"> Size </p>
                <div id="div64">
                    <div id="div65">
                        <h4 id="M">M</h4>
                    </div>
                    <div id="div66">
                        <h4 id="M">X</h4>
                    </div>
                    <div id="div67">
                        <h4 id="M">L</h4>
                    </div>
                    <div id="div68">
                        <h4 id="M">XL</h4>
                    </div>
                </div>

                <a  href="{{route('cart')}}">

                  <button id="login">Add To Bag</button>

                </a>
                
                <button class="plus_minus btn" id="table">+</button>
                <span class="number btn" id="tablee">1</span>
                <button class="minus_plus btn" id="table">-</button>

            </div>

            <div class="col-md-6">

                <img src="{{ asset('assets/IMG/bb (1).png')}}" id="ph54">


                <div id="div69">
                    <img src="{{ asset('assets/IMG/bb (5).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (6).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (2).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (3).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (4).png')}}" id="ph55">
                </div>

            </div>

        </div>

        <div id="div70"></div>
        


        <!-- body 2-->


        <div id="div71">

            <h4 id="des">Description</h4>
            <h4 id="fee">Feedback</h4>

        </div>

        
        <div id="div72">
            <h5 id="share">Share Your Review</h5>
            <h5 id="rate">Rate*</h5>
            <img src="{{ asset('assets/IMG/Group 62.png')}}" id="ph56">
            <br>
            <label id="revi" class="font-weight-bold">Review</label>
            <br>
            <input type="text" id="rev">
            <br>

            <div id="div73">
                <div id="div74">

                    <label id="name" class="font-weight-bold">Name</label>
                    <br>
                    <input type="text" id="text">

                </div>

                <div id="div75">

                    <label id="em" class="font-weight-bold">Email</label>
                    <br>
                    <input type="email" id="email">

                </div>
            </div>

            <button id="vd">Share</button>

        </div>

































        
        
        
        
        <!-- body 3 -->


        <h1 id="sugg"> Suggestion </h1>

        <div class="row" id="div56">
            <div class="col-md-3">

                <div class="card" id="div55">
                    <img src="{{ asset('assets/IMG/hh (1).png')}}" class="card-img-top" alt="..." id="ph50">
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
                    <img src="{{ asset('assets/IMG/hh (2).png')}}" class="card-img-top" alt="..." id="ph50">
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
                    <img src="{{ asset('assets/IMG/hh (3).png')}}" class="card-img-top" alt="..." id="ph50">
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
                    <img src="{{ asset('assets/IMG/hh (4).png')}}" class="card-img-top" alt="..." id="ph50">
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


        </div>








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

    @endsection
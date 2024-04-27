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

                      <h5 >{{$item->product->name}}</h5>


                </div>


                <h1 id="denim">{{$item->product->name}}</h1>

                <h1 id="l60">{{$item->price}}</h1>


                <div id="div63">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                </div>

                <div id="div48">
                  <p id="color"> Color </p>
                  <br>
                  @foreach($colorsOfOtherItems as $itemFromList)
                      @if($itemFromList->id != $item->id)
                        <a href="{{route('item-detail',$itemFromList->id)}}" id="div49" style="background-color: {{$itemFromList->color->hex}};"></a>
                      @else
                        <span  id="div49" style="background-color: {{$itemFromList->color->hex}}; border: 2px solid gold;width: 28px;height: 28px;border-radius: 50%;"></span>
                      @endif
                  @endforeach
                </div>

                <p id="size"> Size </p>
                <div id="div64">
                  @foreach($otherSizesOfSameColor as $otherItem)
                    @if ($otherItem->id != $item->id)
                    <div id="div65" style="width: 60px">
                      <a style="color: unset" href="{{ route('item-detail', $otherItem->id) }}">
                        <h4 id="M">{{ $otherItem->size->name }}</h4>
                        </a>
                    </div>

                    @else
                    <div id="div65" style="border: 2px solid gold;width: 60px;color: gold;">
                      <h4 id="M">{{ $otherItem->size->name }}</h4>
                    </div>
                    @endif

                  @endforeach
                </div>


{{--                  <a class="btn" href="{{route('add-item-to-cart',$item->id)}}" id="login">Add To Bag</a>--}}
                <form method="GET" action="{{ route('add-item-to-cart', $item->id) }}">
                    @csrf
                    <button type="submit" class="btn" id="login">Add To Bag</button>
                    <button class="plus_minus btn" id="table">+</button>
                    <input name="quantity" type="" class="number btn" id="tablee" value="1" min="1" style="width: 50px;">
                    <button class="minus_plus btn" id="table">-</button>
                </form>



            </div>

            <div class="col-md-6">

                {{-- <img src="{{ asset('assets/IMG/bb (1).png')}}" id="ph54"> --}}
                <img src="{{ $item->getImageUrl()}}" id="ph54">


                {{-- <div id="div69">
                    <img src="{{ asset('assets/IMG/bb (5).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (6).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (2).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (3).png')}}" id="ph55">
                    <img src="{{ asset('assets/IMG/bb (4).png')}}" id="ph55">
                </div> --}}

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
          <form method="POST" action="{{ route('item-detail.save-review', ['itemId' => $item->id]) }}">
            @csrf
            <img src="{{ asset('assets/IMG/Group 62.png')}}" id="ph56">
            <br>
            <label id="revi" class="font-weight-bold">comment</label>
            <br>
            <input type="text" id="rev" name="comment">
            <br>
            <div id="div73">
                <div id="div74">
                    <label id="name" class="font-weight-bold">Name</label>
                    <br>
                    <input type="text" id="name" name="name">
                </div>
                {{-- <div id="div75">
                    <label id="em" class="font-weight-bold">Email</label>
                    <br>
                    <input type="email" id="email" name="email">
                </div> --}}
            </div>
            <button id="vd" type="submit">Share</button>
        </form>

      </div>




        <!-- body 3 -->


        <h1 id="sugg"> Suggestion </h1>

        <div class="row" id="div56">
          @foreach($randomProducts as $product)
              <x-product-card :product="$product"/>
          @endforeach


        </div>

        @endsection


        @push('scripts')

            <script>
                const plus = document.querySelector('.plus_minus'),
                    minus = document.querySelector('.minus_plus'),
                    number_el = document.querySelector('.number');

                plus.addEventListener('click', (event) => {
                    event.preventDefault();
                    let val = parseInt(number_el.value);
                    number_el.value = ++val;
                });

                minus.addEventListener('click', (event) => {
                    event.preventDefault();
                    let val = parseInt(number_el.value);
                    if(val > 1) { // Prevent the value from going below 1
                        number_el.value = --val;
                    }
                });
            </script>
        @endpush

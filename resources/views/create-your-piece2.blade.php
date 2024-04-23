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
                @if($selectedDesign)
                    <img src="{{ asset($selectedDesign['imagePath'])}}" id="ph2">
                @endif

            </div>
            {{--            <input type="radio" name="imageSelector" value="option1" onchange="changeImage(this.value)"> Option 1--}}
            {{--            <input type="radio" name="imageSelector" value="option2" onchange="changeImage(this.value)"> Option 2--}}
            {{--            <input type="radio" name="imageSelector" value="option3" onchange="changeImage(this.value)"> Option 3--}}


            <div id="div3" style=" margin-top: 50px;" >
                <p id="sub">Subtotal</p>
                <p id="l3">{{$subTotal}}LE</p>
            </div>
            <div id="div3" style=" margin-top: 0px;" >
                <p id="sub">Shipping</p>
                <p id="l3">{{$shipping}}LE</p>
            </div>
            <div id="div3" style=" margin-top: 0px;" >
                <p id="sub">Totol</p>
                <p id="l3">{{$total}}LE</p>
            </div>


                @if($selectedDesign && $materialKey && $sizekey)
                    <form method="POST" action="{{ route('order-cutom') }}">
                        @csrf
                        <button type="submit" id="vd">Order</button>
                        <input type="hidden" name="design" value="{{ $designKey }}">
                        <input type="hidden" name="material" value="{{ $materialKey }}">
                        <input type="hidden" name="size" value="{{ $sizekey }}">
                        <input type="hidden" name="total" value="{{ $total }}">
                        <input type="hidden" name="shipping" value="{{ $shipping }}">
                        <input type="hidden" name="sub_total" value="{{ $subTotal }}">
                        <input type="hidden" name="color" id="selectedColor">


                @else
                    <button id="vd" onclick="showAlert()">Order</button>
                @endif

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
{{--            @php--}}
{{--                $designs = [--}}
{{--                    ['value' => 'design1', 'imagePath' => asset('assets/IMG/p (1).png'), 'priceSize1'=>'340LE','priceSize2'=>'330LE'],--}}
{{--                    ['value' => 'design2', 'imagePath' => asset('assets/IMG/p (2).png'),'priceSize1'=>'330LE','priceSize2'=>'320LE'],--}}
{{--                    ['value' => 'design3', 'imagePath' => asset('assets/IMG/p (3).png'), 'priceSize1'=>'320LE','priceSize2'=>'320LE'],--}}
{{--                    ['value' => 'design4', 'imagePath' => asset('assets/IMG/p (4).png'), 'priceSize1'=>'300LE','priceSize2'=>'290LE'],--}}
{{--                    ['value' => 'design5', 'imagePath' => asset('assets/IMG/p (5).png'), 'priceSize1'=>'310LE','priceSize2'=>'300LE'],--}}
{{--                ];--}}
{{--            @endphp--}}

            <div id="div6">
                <div id="design" class="row" style="height: 80%">
                    <div class="col-md-2 text-center" style="height: 100%">
                        <div class="form-group" style="visibility: hidden">
                            <input  type="radio" name="" >
                        </div>
                        {{--                        <div class="card">--}}
                        <img style="visibility: hidden;height: 80%;width: auto" src="{{ $designs[0]['imagePath'] }}" class="card-img-top"
                             alt="...">

                        <div class="row my-2 " style="height: 10%">
                            <input data-key="size"  name="size" type="radio" value="regular" @if($sizekey == 'regular') checked @endif>
                            <p style="" id="size">Regular Size Price</p>
                        </div>
                        <div class="row  my-2"  style="height: 10%">
                            <input data-key="size" name="size" type="radio" value="plus"  @if($sizekey == 'plus') checked @endif>
                            <p id="size">Plus Size Price</p>
                        </div>
                    </div>
                    @foreach($designs as $item)

                        <div class="col-md-2 text-center" style="height: 100%">
                            {{--                            <a style="width: 100%;height: 100%;display: block" href="/a">--}}
                            <div class="form-group">
                                <input type="radio" data-key="design" name="design" value="{{ $item['value'] }}"  @if($designKey == $item['value']) checked @endif
                                       onchange="changeImage(this.value)">
                            </div>
                            {{--                        <div class="card">--}}
                            <img style="height: 80%;width: auto" src="{{ $item['imagePath'] }}" class="card-img-top"
                                 alt="...">
                            <p class="m-2" id="">{{$item['priceSize1']}}LE</p>
                            <p class="m-2" id="">{{$item['priceSize2']}}LE</p>
                            {{--                        </div>--}}
                            {{--                            </a>--}}
                        </div>
                    @endforeach
                </div>
                {{--                <div id="div9">--}}
                {{--                    <input name="size" type="radio" value="regular">--}}
                {{--                    <p id="size">Regular Size Price</p>--}}
                {{--                    @foreach($designs as $item)--}}
                {{--                        <p id="l1">{{$item['priceSize1']}}LE</p>--}}
                {{--                    @endforeach--}}
                {{--                    <p id="l1">340LE</p>--}}
                {{--                    <p id="l2">330LE</p>--}}
                {{--                    <p id="l6">330LE</p>--}}
                {{--                    <p id="l4">300LE</p>--}}
                {{--                    <p id="l5">310LE</p>--}}

                {{--                </div>--}}


                {{--                <div id="div9">--}}

                {{--                    <input name="size" type="radio" value="plus">--}}
                {{--                    <p id="size">Plus Size Price</p>--}}
                {{--                    <p id="l7">240LE</p>--}}
                {{--                    <p id="l8">230LE</p>--}}
                {{--                    <p id="l9">230LE</p>--}}
                {{--                    <p id="l10">200LE</p>--}}
                {{--                    <p id="l11">210LE</p>--}}

                {{--                </div>--}}

            </div>


            <div id="div10">
                <h6 id="mat">Material</h6>
            </div>


            <div id="div11">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <tr class="text-center">
                                <th scope="col" style="width: 33.33%"></th>
                                <th class="text-primary" scope="col" style="width: 33.33%">R.Size</th>
                                <th class="text-primary" scope="col" style="width: 33.33%">+Size</th>
                            </tr>
                            @php
                                $data = [
                                    ['name' => 'Cotton', 'rSize' => 60, 'plusSize' => 60],
                                    ['name' => 'Siobhan’s', 'rSize' => 60, 'plusSize' => 60],
                                    ['name' => 'Linen', 'rSize' => 60, 'plusSize' => 60],
                                    ['name' => 'Lace', 'rSize' => 60, 'plusSize' => 60],
                                ];
                            @endphp

                            @foreach ($data as $item)
                                <tr class="text-center">
                                    <td class="border-0 align-middle p-1 text-left">
                                        <label>
                                            <input type="radio" name="material" data-key="material" value="{{ $item['name'] }}"
                                                   class="ml-2 mr-2" @if($materialKey == $item['name']) checked @endif>
                                            <span style="color: #E19FAE; font-size: 22px">{{ $item['name'] }}</span>
                                        </label>
                                    </td>
                                    <td class="border-0 p-1" style="font-size: 22px">{{ $item['rSize'] }}</td>
                                    <td class="border-0 p-1" style="font-size: 22px">{{ $item['plusSize'] }}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>


            </div>


            <div id="div13">
                <h6 id="color">Color</h6>
            </div>

            <div id="div14" >
                <div class="row p-3" style="gap: 5px;">
                    @foreach($colors as $color)
                    <div class="colorPick" data-value="{{$color->id}}" style="background-color: {{$color->hex}}; width:25px;height:25px;border-radius:50px;cursor: pointer;margin-left: 20px;"></div>
                    @endforeach
                </div>

            </div>

            <div id="div15">

                <img src="{{ asset('assets/IMG/rrrrr.png')}}" id="ph12">
                <h1 id="print" class="font-weight-bold">Download Print</h1>

            </div>

        </div>

    </div>

@endsection
@push('scripts')
<script>
    let colors = document.querySelectorAll('.colorPick')
    let selectedColor = document.getElementById('selectedColor')
    colors.forEach(color => {
        color.addEventListener('click',()=>{

            colors.forEach(function(color) {
                color.style.border = 'unset'
            })

            color.style.border = '2px solid black'
            selectedColor.value = color.dataset.value
        })
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the form and radio buttons
            const form = document.getElementById('design');
            const radios = document.querySelectorAll('input[type="radio"]');

            // Add event listener to radio buttons
            radios.forEach(radio => {
                radio.addEventListener('change', function () {
                    // Get the selected value
                    const selectedValue = this.value;
                    const selectedName = this.name;

                    // Get the current URL
                    let currentURL = window.location.href;

// Create a URL object to work with search parameters
                    let url = new URL(currentURL);

// Set the 'x' parameter to 42
                    url.searchParams.set(selectedName, selectedValue);

// Get the modified URL with updated search parameters
                    let modifiedURL = url.toString();
                    // Redirect to the selected URL
                    window.location.href = modifiedURL;
                });
            });
        });
    </script>
    <script>
        // Define an array to store the paths of each image

        var imagePaths = {
            "design1": "{{ asset('assets/IMG/p (1).png')}}",
            "design2": "{{ asset('assets/IMG/p (2).png')}}",
            "design3": "{{ asset('assets/IMG/p (3).png')}}",
            "design4": "{{ asset('assets/IMG/p (4).png')}}",
            "design5": "{{ asset('assets/IMG/p (5).png')}}",
            // Add more designs and paths as needed
        };

        function changeImage(design) {
            var img = document.getElementById("ph2");

            // Get the path of the selected image from the array
            var imagePath = imagePaths[design];

            // Update the src attribute of the image
            img.src = imagePath;
        }
    </script>
    <script>
        function showAlert() {
            alert("plase select design, material and size");
        }
    </script>
@endpush

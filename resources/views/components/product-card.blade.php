<div class="col-md-3 mt-5">
    <div class="card" id="div55">
        <a href="{{route('item-detail',$product->firstItem->id)}}" style="color: unset;text-decoration:none">
            <img src="{{ asset($product->firstItem->getImageUrl())}}" class="card-img-top" alt="..." id="ph50">
            <div class="card-body">
                <p class="card-title" id="pro" style="padding: 0;">{{$product->name}}</p>

                <div id="div48">
                    @foreach($product->colors->take(7) as $color)
                        <div id="div49" style="background-color: {{$color->hex}};"></div>
                    @endforeach
                    {{--                    <div id="div49"></div>--}}
                    {{--                    <div id="div50"></div>--}}
                    {{--                    <div id="div51"></div>--}}
                    {{--                    <div id="div52" style="background-color: #0D600B;"></div>--}}
                    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">--}}
                    {{--                        <circle cx="8" cy="8" r="8"/>--}}
                    {{--                    </svg>--}}
                </div>

                <div id="div53">

                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                    <img src="{{ asset('assets/IMG/Star 5.png')}}">
                </div>


                <div id="div54">
                    <h3 id="l6">{{round($product->firstItem->price)}}LE</h3>
                    <img src="{{ asset('assets/IMG/Vector.png')}}" id="ph48">
                </div>


            </div>
        </a>
    </div>
</div>

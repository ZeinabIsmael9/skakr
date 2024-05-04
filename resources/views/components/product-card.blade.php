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

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



    </div>
@endsection

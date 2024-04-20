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

    </div>

@endsection

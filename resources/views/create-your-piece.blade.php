@extends('layouts.master')
@push('styles')
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.CSS') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('assets/CSS/Design Your Own 1.CSS')}}"/>

@endpush
@section('title', 'New Collection')

@section('content')
    <div id="design">
    <div id="div1">

        <h1 id="piece" class="font-weight-bold">Create Your Piece</h1>
        <div id="div2">

            <img src="{{ asset('assets/IMG/dress.png')}}">
            <img src="{{ asset('assets/IMG/panty.png')}}" id="ph1">
            <img src="{{ asset('assets/IMG/blouse.png')}}"id="ph1">
            <img src="{{ asset('assets/IMG/skirrt.png')}}"id="ph1">
            <img src="{{ asset('assets/IMG/jumpsuit.png')}}"id="ph1">

        </div>


        <div id="div3">

            <p id="dre">Dress</p>
            <p id="pant">Pant</p>
            <p id="pant1">Blouse</p>
            <p id="pant2">Skirt</p>
            <p id="pant3">Jumpsuit</p>

        </div>

        <a href="{{route('create-your-piece2')}}">

            <button id="vd">Let’s Start</button>

        </a>


    </div>
    </div>
@endsection

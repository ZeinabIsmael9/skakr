@extends('layouts.master')
@push('styles')
<meta charset="utf-8"/>
<title> Sign UP </title>
<link rel="stylesheet" href="{{ asset('assets/CSS/Sign Up.CSS')}}"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endpush
@section('content')
{{-- <x-guest-layout> --}}



    <section style="display: flex; justify-content:center; align-items:center; max-width:100vw">

        <div class="login__container">
            <div class="login__form__container">
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
                <div class="title">
                    <h2 id="back" class="font-weight-bold text-center" style="color:#FFC7C7">SIGN UP!</h2>
                </div>
                <div class="form__container">
                    <form method="POST" class="login__form" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div>
                            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                            <x-text-input placeholder="Name" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="">
                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                            <x-text-input placeholder="Email Address" id="emaill" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="">
                            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                            <x-text-input id="password" 
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Confirm Password -->
                        <div class="">
                            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                            <x-text-input
                                            type="password"
                                            placeholder="Confirm Password" id="conf"
                                            name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <div class="sub__btn">
                            {{-- <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button> --}}
                            
                            <button type="submit"> Sign Up </button>
                        </div>
                    </form> 
                </div>
            </div>
            <div class="login__image__container">
                <img src="{{asset('assets/IMG/y (1).png')}}" alt="" />
            </div>
        </div>
    </section>
{{-- </x-guest-layout> --}}
@endsection

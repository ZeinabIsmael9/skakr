@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/CSS/Login.CSS')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endpush
@section('content')

{{-- <x-guest-layout> --}}

<section style="display: flex; justify-content:center; align-items:center;">

    <div class="login__container">
        <div class="login__form__container">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="title">
                <div class="logo__container">
                    <img src="{{asset('assets/IMG/Property 1=تصميم بدون عنوان (65) 2(1).png')}}"id="ph28"/>
                    <div >
                        <a href="{{route('register')}}" id="acc">create New Account</a>
                    </div>
                </div>
                <h2 id="back" class="font-weight-bold">Welcome Back</h2>
                <p id="det">Enter Your Account Details</p>
            </div>
            <div class="form__container">
                <form method="POST" class="login__form" action="{{ route('login') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        {{-- <x-input-label for="email" :value="__('Email')"  /> --}}
                        <x-text-input type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="Your Email" id="email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" /> 
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}
            
                        <x-text-input class="block w-full"
                                        type="password"
                                        name="password"
                                        placeholder="Password"
                                        id="pass"
                                        required autocomplete="current-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <!-- Remember Me -->
                    <div class="remember__passwordreset__container">
                        
                        <div class="block">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class=" text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="reset__pass" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
            
            
                    <div class="sub__btn">
                        {{-- <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button> --}}
                        
                        <button type="submit"> login </button>
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

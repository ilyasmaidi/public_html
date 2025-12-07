@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-form position-relative">
    <div class="login-form-area shadow py-40 px-30 lg-px-15 bg-white position-relative">
        
        @if(session('success'))
            <div class="alert alert-success text-center mb-20">
                {{ session('success') }}
            </div>
        @endif

        <form class="position-relative md-mb-50" method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-logo text-center pb-50">
                <img  src="{{ asset('assets/images/S.png') }}" alt="logo-image" style="width: 90px;margin-bottom: 20px;">
            </div>

            <div class="form-group validate-input w-100 position-relative" data-validate="Valid email is: a@b.c">
                <input class="form-control" type="text" name="email" required autofocus placeholder="Email or Username">
            </div>

            <div class="form-group validate-input w-100 position-relative" data-validate="Enter password">
                <span class="btn-show-pass">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
                <input class="form-control" type="password" name="password" required placeholder="Password">
            </div>

            <a class="mb-30 color-primary" href="#">Forgot Password?</a>

            <button class="btn btn-primary d-table mx-auto w-100">Sign In</button>

            <div class="text-center mt-30">
                <span class="mr-15">Don’t have an account?</span>
                <a class="color-primary" href="{{ route('register') }}">Sign Up!</a>
            </div>
        </form>

        <div class="login-form-footer color-gray">
            <ul class="form-list d-table mx-auto hover-primary">
                <li>© 2025 Soul</li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

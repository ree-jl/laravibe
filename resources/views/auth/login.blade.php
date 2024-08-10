@extends('layouts.app')

@section('content')
<div class="img-holder">
    <div class="bg"></div>
    <div class="info-holder">
        <img src="{{ asset('assets/images/graphic9.svg') }}" alt="">
    </div>
</div>
<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <div class="website-logo-inside logo-normal">
                <a href="index.html">
                    <div class="logo">
                        <img class="logo-size" src="{{ asset('assets/img/logo.png') }}" alt="">
                    </div>
                </a>
            </div>
            <h3 class="font-md my-5">Login to account</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        placeholder="E-mail Address" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                        placeholder="Password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-button d-flex align-items-center">
                        <div class="submit-container mr-auto">
                            <button id="submit" type="submit" class="ibtn">{{ __('Login') }}</button>
                        </div>
                    </div>
                </div>
            </form>
            {{-- <div class="other-links social-with-title">
                <div class="text">Or login with</div>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i
                        class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
            </div> --}}
            <div class="page-links my-3">
                <a href="{{ route('register') }}">Register new account</a>
            </div>
        </div>
    </div>
</div>

@endsection
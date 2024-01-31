@extends('layouts.auth')

@section('page_name')
    Register
@endsection

@section('content')
    <div class="auth-wrapper auth-cover">
        <div class="auth-inner row m-0">
            <!-- Brand logo--><a class="brand-logo" href="{{ route('home') }}">
                <img width="100" src="{{ asset('iac_logo.png') }}" alt="">
                <!-- <h2 class="brand-text text-primary ms-1">IAC</h2> -->
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid"
                        src="{{ asset('dashboard_assets') }}/images/pages/register-v2.svg" alt="Register V2" /></div>
            </div>
            <!-- /Left Text-->
            <!-- Register-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1">Adventure starts here 🚀</h2>
                    <p class="card-text mb-2">Make your app management easy and fun!</p>
                    <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label class="form-label" for="register-name">Name</label>
                            <input class="form-control @error('name') error @enderror" id="register-name" type="text"
                                name="name" placeholder="johndoe" aria-describedby="register-name" autofocus=""
                                tabindex="1" value="{{ old('name') }}" />
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="register-email">Email</label>
                            <input class="form-control @error('email') error @enderror" id="register-email" type="text"
                                name="email" placeholder="john@example.com" aria-describedby="register-email"
                                tabindex="2" value="{{ old('email') }}" />
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="register-password">Password</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge @error('password') error @enderror"
                                    id="register-password" type="password" name="password" placeholder="············"
                                    aria-describedby="register-password" tabindex="3" /><span
                                    class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="confirm-password">Confirm Password</label>
                            <input class="form-control" id="confirm-password" type="password"
                                name="password_confirmation" placeholder="············" />
                        </div>
                        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
                    </form>
                    <p class="text-center mt-2"><span>Already have an account?</span><a
                            href="{{ route('login') }}"><span>&nbsp;Sign in instead</span></a></p>
                    <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>
                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a href="{{ route('google.redirect') }}" type="button"
                            class="btn btn-google waves-effect waves-float waves-light">
                            <i class="fa-brands fa-google"></i>
                            <span>Register with Google</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Register-->
        </div>
    </div>
@endsection

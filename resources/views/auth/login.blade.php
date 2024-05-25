@extends('layouts.sign-in')
@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">
                                        {{ request()->routeIs('admin.login') ? 'Admin ' : 'User ' }}| Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                placeholder="Email" aria-label="Email" name="email"
                                                value=" {{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password" value="{{ old('password') }}"
                                                aria-label="Password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    @if (request()->routeIs('login'))
                                        <p class="mb-4 text-sm mx-auto">
                                            Don't have an account?
                                            <a href="{{ route('register') }}"
                                                class="text-primary text-gradient font-weight-bold">Sign
                                                up</a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
      background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <div class="mt-5 mb-3">
                                    <a href="{{ route('landing.home') }}" role="button">
                                        <img src="{{ asset('assets/landing') }}/img/brand/artech-white.png"
                                            style="width: 100%;" alt="image brand" class="bg-gradient-primary opacity-6">
                                    </a>
                                </div>
                                <p class="text-white position-relative">Please log in to access Artech Design HubCenter and
                                    start managing your reservations easily and efficiently</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

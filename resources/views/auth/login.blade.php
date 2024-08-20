@extends('auth.master')
@section('title', 'login')

@section('content')

<div class="login-registration-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="login-page-form-area">
                    <h4 class="title">Login to Your Account👋</h4>
                    <form action="#">
                        <div class="single-input-wrapper">
                            <label for="email">Your Email</label>
                            <input id="email" type="email" placeholder="Enter Your Email" required="">
                        </div>
                        <div class="single-input-wrapper">
                            <label for="password">Your Password</label>
                            <input id="password" type="password" placeholder="Password" required="">
                        </div>
                        <div class="single-checkbox-filter">
                            <div class="check-box">
                                <input type="checkbox" id="type-1">
                                <label for="type-1">Remember Me</label><br>
                            </div>
                        </div>
                        <button class="rts-btn btn-primary">Login</button>

                        <div class="google-apple-wrapper">
                            <div class="google">
                                <img src="{{asset('/assets/images/06_1.png')}}" alt="contact">
                            </div>
                            <div class="google">
                                <img src="{{asset('/assets/images/07.png')}}" alt="contact">
                            </div>
                        </div>
                        <p>Don't Have an account? <a href="{{route('signup')}}">Registration</a></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-thumbnail-login-p mt--100">
                    <img src="{{asset('/assets/images/login-bg.png')}}" width="600" height="495" alt="login-form">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

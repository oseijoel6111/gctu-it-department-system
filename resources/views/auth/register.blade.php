@extends('auth.master')
@section('title', 'login')

@section('content')

<div class="login-registration-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="login-page-form-area">
                    <h4 class="title">Sign Up to Your Account👋</h4>
                    <form action="#">
                        <div class="single-input-wrapper">
                            <label for="name">Your Name*</label>
                            <input id="name" type="text" placeholder="Enter Your Name" required="">
                        </div>
                        <div class="half-input-wrapper">
                            <div class="single-input-wrapper">
                                <label for="username">User Name</label>
                                <input id="username" type="text" placeholder="Enter User Name" required="">
                            </div>
                            <div class="single-input-wrapper">
                                <label for="email">Email*</label>
                                <input id="email" type="email" placeholder="Enter Your Email" required="">
                            </div>
                        </div>
                        <div class="half-input-wrapper">
                            <div class="single-input-wrapper">
                                <label for="password">Your Password</label>
                                <input id="password" type="password" placeholder="Password" required="">
                            </div>
                            <div class="single-input-wrapper">
                                <label for="passwords">Confirm Password</label>
                                <input id="passwords" type="password" placeholder="Confirm Password" required="">
                            </div>
                        </div>
                        <div class="single-checkbox-filter">
                            <div class="check-box">
                                <input type="checkbox" id="type-1">
                                <label for="type-1">Accept the Terms and Privacy Policy</label><br>
                            </div>
                        </div>
                        <button class="rts-btn btn-primary">Login</button>
                        <p>Don't Have an account? <a href="#">Registration</a></p>
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

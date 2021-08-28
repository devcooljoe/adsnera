@extends('layouts.login-app')

@section('title')
    <title>Verify Email - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
@endsection
<!-- form section start -->

@section('content')
    <section class="w3l-hotair-form">
        <h1>Verify Your Email Address</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Confirm Your Email</h2>
                        <br>
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="verify-alert alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a href="#/email/resend"
                                    onclick="document.getElementById('form').submit()">{{ __('click here to request another one.') }}</a>
                                <form id="form" class="d-inline" method="POST"
                                    action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button style="display: none;" type="submit"
                                        class="hidden btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request another') }}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="{{ route('index') }}/images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->


    @endsection

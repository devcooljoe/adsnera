@extends('layouts.login-app')

@section('title')
    <title>Verify Email - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Verify Email - Adsnera" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Verify Email - Adsnera" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Verify Email - Adsnera" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Verify Email - Adsnera" />
    <link rel="image_src" href="{{ route('index') }}/images/icon.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/icon.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/icon.png" />
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

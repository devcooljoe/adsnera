@extends('layouts.login-app')

@section('title')
    <title>Register - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Register - Adsnera" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Register - Adsnera" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Register - Adsnera" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Register - Adsnera" />
    <link rel="image_src" href="{{ route('index') }}/images/icon.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/icon.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/icon.png" />
    <!-- //Meta tag Keywords -->
@endsection

@section('content')
    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Welcome To Adsnera!</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Register</h2>
                        <form action="{{ route('register') }}" method="post">
                            @csrf

                            <input type="text" @error('name') style="border-color: darkred; background-color: #fff2f2;"
                                @enderror
                                class="input form-control register-name border @error('name') is-invalid invalid-entry @enderror"
                                placeholder="Enter your name" name="name" id="name" required="" value="{{ old('name') }}">
                            @error('name')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror

                            <input type="text" @error('email') style="border-color: darkred; background-color: #fff2f2;"
                                @enderror
                                class="input form-control register-email border @error('email') is-invalid invalid-entry @enderror"
                                placeholder="Enter your email" name="email" id="email" required=""
                                value="{{ old('email') }}">
                            @error('email')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror

                            <input type="password" @error('password')
                                style="border-color: darkred; background-color: #fff2f2;" @enderror
                                class="input form-control login-password border @error('password') is-invalid invalid-entry @enderror"
                                placeholder="Create a password" name="password" required="">
                            @error('password')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                            <p><span class="view-p">View Password</span><span class="hide-p">Hide
                                    Password</span></p>
                            <br>
                            <input class="form-check-input" type="radio" name="account_type" value="promoter" id="radio1"
                                required>
                            <label style="color:grey; cursor:pointer" class="form-check-label" for="radio1">
                                {{ __('I Want to Earn (Promoter)') }}
                            </label><br><br>
                            <input class="form-check-input" type="radio" name="account_type" value="advertiser" id="radio2"
                                required>
                            <label style="color:grey; cursor:pointer" class="form-check-label" for="radio2">
                                {{ __('I want to Advertise my Goods/Services (Advertiser)') }}
                            </label>
                            <br>
                            <br>
                            <button class="btn" type="submit"><i class="fas fa-user"></i> Register</button>
                            <p class="account">Already have an account? <a href="{{ route('login') }}">Login</a>
                            </p>
                        </form>

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

        <!-- //form section start -->
    @endsection

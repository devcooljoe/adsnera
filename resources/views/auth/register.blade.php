@extends('layouts.login-app')

@section('title')
    <title>Register - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
                            <p><span class="view-p">View Password</span><span class="hide-p">Hide Password</span></p>
                            <br>
                            <input class="form-check-input" type="radio" name="account_type" value="promoter" id="radio1"
                                required>
                            <label style="color:grey; cursor:pointer" class="form-check-label" for="radio1">
                                {{ __('Promoter') }}
                            </label>
                            <input class="form-check-input" type="radio" name="account_type" value="advertiser" id="radio2"
                                required>
                            <label style="color:grey; cursor:pointer" class="form-check-label" for="radio2">
                                {{ __('Advertiser') }}
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
                            <img src="images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        
    <!-- //form section start -->
@endsection

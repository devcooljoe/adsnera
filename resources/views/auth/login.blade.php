@extends('layouts.login-app')

@section('title')
    <title>Login - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
@endsection
<!-- form section start -->

@section('content')
    <section class="w3l-hotair-form">
        <h1>Welcome Back!</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <input type="text" @error('email') style="border-color: darkred; background-color: #fff2f2;"
                                    @enderror class="input text @error('email') is-invalid invalid-entry @enderror"
                                    placeholder="Enter your email" name="email" id="recipient-name" required=""
                                    value="{{ old('email') }}">

                                <input type="password" @error('password')
                                    style="border-color: darkred; background-color: #fff2f2;" @enderror
                                    class="input password @error('email') is-invalid invalid-entry @enderror"
                                    placeholder="Enter your password" name="password" id="password" required="">

                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label style="color:grey" class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <br>
                                <br>
                                @error('email')
                                    <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                @enderror
                                <button class="btn" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>


                                <p class="account">Don't have an account? <a
                                        href="{{ route('register') }}">Register</a><br><br><a
                                        href="{{ route('password.request') }}">Forgot Password?</a></p>
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


        @endsection

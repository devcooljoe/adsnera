@extends('layouts.login-app')

@section('title')
    <title>Reset Your Password - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
@endsection
<!-- form section start -->

@section('content')
    <section class="w3l-hotair-form">
        <h1>Reset Your Password</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Set a new Password</h2>
                        <form action="{{ route('password.update') }}" method="post">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token ?? '' }}">

                            <input type="email" class="input text @error('email') is-invalid invalid-entry @enderror"
                                placeholder="Enter your email" name="email" required=""
                                value="{{ $email ?? old('email') }}">

                            @error('email')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                            <br>
                            <input type="password" class="input text @error('password') is-invalid invalid-entry @enderror"
                                placeholder="Enter a new Password" name="password" required="">
                            <input type="password" class="input text @error('password') is-invalid invalid-entry @enderror"
                                placeholder="Confirm Password" name="password_confirmation" required="">
                            @error('password')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                            <br>
                            <button class="btn" type="submit"><i class="fas fa-unlock"></i> Reset Password</button>

                        </form>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="/images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        

@endsection

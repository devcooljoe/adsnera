@extends('layouts.login-app')

@section('title')
    <title>Payment Page - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords" content="Make Payment Here On Adsnera" />
    <!-- //Meta tag Keywords -->
@endsection
<!-- form section start -->

@section('content')
    <section class="w3l-hotair-form">
        <h1>Adsnera Payment Page</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>{{ Session::get('payment-title') ?? '' }}</h2>
                        <form action="/account/payment" method="post">
                            @csrf

                            <input type="text" @error('email') style="border-color: darkred; background-color: #fff2f2;"
                                    @enderror class="input text @error('email') is-invalid invalid-entry @enderror"
                                    placeholder="" name="email" id="recipient-name" required=""
                                    value="{{ auth()->user()->email }}" readonly>

                                <input type="text" @error('amount') style="border-color: darkred; background-color: #fff2f2;"
                                        @enderror class="input password @error('amount') is-invalid invalid-entry @enderror"
                                        placeholder="" name="amount" id="password" required="" readonly
                                        value="₦{{ Session::get('payment-price') }}">

                                    <br>
                                    <br>
                                    <button class="btn" type="submit"><i class="fas fa-money"></i> Make Payment</button>

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

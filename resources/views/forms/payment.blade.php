@extends('layouts.login-app')

@section('title')
    <title>Payment Page - Adsnera</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Payment Page - Adsnera" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Payment Page - Adsnera" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Payment Page - Adsnera" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Payment Page - Adsnera" />
    <link rel="image_src" href="{{ route('index') }}/images/logo.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/logo.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/logo.png" />
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

                            <input type="text"
                                @error('email') style="border-color: darkred; background-color: #fff2f2;"
                                @enderror
                                class="input text @error('email') is-invalid invalid-entry @enderror" placeholder=""
                                name="email" id="recipient-name" required="" value="{{ auth()->user()->email }}"
                                readonly>

                            <input type="text"
                                @error('amount') style="border-color: darkred; background-color: #fff2f2;"
                                @enderror
                                class="input password @error('amount') is-invalid invalid-entry @enderror" placeholder=""
                                name="amount" id="password" required="" readonly
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

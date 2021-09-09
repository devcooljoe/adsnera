@extends('layouts.dashboard-app')

@section('title')
    <title>New Campaigns - {{ auth()->user()->name }}</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="New Campaigns - {{ auth()->user()->name }}" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="New Campaigns - {{ auth()->user()->name }}" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="New Campaigns - {{ auth()->user()->name }}" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="New Campaigns - {{ auth()->user()->name }}" />
    <link rel="image_src" href="{{ route('index') }}/images/icon.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/icon.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/icon.png" />
    <!-- //Meta tag Keywords -->
    <style>
        .textarea {
            margin-right: 4px;
        }

        .no-radius {
            border-radius: none;
        }

        .post {
            display: flex;
        }

        .but {
            border-radius: 0px !important;
        }

    </style>
@endsection

@section('content')
    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">

            <div class="graph-form agile_info_shadow">
                <h3 class="w3_inner_tittle two">Create New Campaign</h3>
                <div class="form-body">
                    <form method="post" autocomplete="off" action="/advertiser/campaigns/new" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"> <label for="exampleInputEmail1">Campaign Name (Required)</label> <input
                                type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder=""
                                required value="{{ old('name') ?? '' }}">@error('name')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label Passwordfor="exampleInputPassword1">Destination Link
                                (Optional)</label> <input type="text" name="link" class="form-control"
                                id="exampleInputPassword1" placeholder="https://example.com/yourlink"
                                value="{{ old('link') ?? '' }}">
                            @error('link')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="exampleInputFile">Picture for Advert (Required) <b>Note:
                                    Picture size should be 10'' x 4'' </b></label>

                            <input type="file" id="exampleInputFile" name="file" required>
                            @error('file')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <button type="submit" class="btn btn-default">Add Campaign</button>
                    </form>
                </div>

            </div>
            <!-- /w3ls_agile_circle_progress-->
            <!-- /chart_agile-->
            <br><br>

            <!-- /agile_top_w3_post_sections-->
            <div class="agile_top_w3_post_sections">
                <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
                    <div class="img_wthee_post1">
                        <h3 class="w3_inner_tittle"> Flip Clock</h3>
                        <div class="main-example">
                            <div class="clock"></div>
                            <div class="message"></div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
        <!-- //inner_content_w3_agile_info-->
    </div>
    <!-- //inner_content-->
@endsection

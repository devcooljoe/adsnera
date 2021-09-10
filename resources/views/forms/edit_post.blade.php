@extends('layouts.dashboard-app')

@section('title')
    <title>Edit Post - {{ auth()->user()->name }}</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Edit Post - {{ auth()->user()->name }}" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Edit Post - {{ auth()->user()->name }}" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Edit Post - {{ auth()->user()->name }}" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Edit Post - {{ auth()->user()->name }}" />
    <link rel="image_src" href="{{ route('index') }}/images/logo.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/logo.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/logo.png" />

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
                <h3 class="w3_inner_tittle two">Edit Post</h3>
                <div class="row">
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs"><br></div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-body">
                            <form method="post" autocomplete="off" action="/posts/{{ $post->id }}/edit">
                                @csrf
                                <div class="form-group"> <label for="exampleInputEmail1">Post Title (Required)</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="" required value="{{ old('title') ?? $post->title }}">
                                    @error('title')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group"> <label Passwordfor="exampleInputPassword1">Post Body
                                        (Required)</label>
                                    <textarea id="" cols="30" rows="10" class="form-control" name="body"
                                        required>{{ old('body') ?? $post->body }}</textarea>
                                    @error('body')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group"> <label for="exampleInput">Post Category (Required)</label>
                                    <select name="category" id="exampleInput" class="form-control" required
                                        style="padding: 0px">
                                        <option value="">Select the Post Category</option>
                                        <option value="sports" @if ($post->category == 'sports') {{ 'selected' }} @endif>Sports</option>
                                        <option value="tech" @if ($post->category == 'tech') {{ 'selected' }} @endif>Tech</option>
                                        <option value="business" @if ($post->category == 'business') {{ 'selected' }} @endif>Business</option>
                                        <option value="gist" @if ($post->category == 'gist') {{ 'selected' }} @endif>Gist/Gossip</option>
                                        <option value="entertainment" @if ($post->category == 'entertainment') {{ 'selected' }} @endif>Entertainment</option>
                                        <option value="education" @if ($post->category == 'education') {{ 'selected' }} @endif>Education</option>
                                        <option value="politics" @if ($post->category == 'politics') {{ 'selected' }} @endif>Politics</option>
                                        <option value="blog" @if ($post->category == 'blog') {{ 'selected' }} @endif>Blog</option>
                                    </select>
                                    @error('category')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-default">Add Post</button>
                            </form>
                        </div>

                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs"><br></div>
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

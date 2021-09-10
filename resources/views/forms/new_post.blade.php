@extends('layouts.dashboard-app')

@section('title')
    <title>New Post - {{ auth()->user()->name }}</title>
    <!-- Meta tag Keywords -->
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="New Post - {{ auth()->user()->name }}" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="New Post - {{ auth()->user()->name }}" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="New Post - {{ auth()->user()->name }}" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="New Post - {{ auth()->user()->name }}" />
    <link rel="image_src" href="{{ route('index') }}/images/logo.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/logo.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/logo.png" />
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
                <h3 class="w3_inner_tittle two">Add New Post</h3>

                <div class="row">
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs"><br></div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-body">
                            <form method="post" autocomplete="off" action="/posts/new" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group"> <label for="exampleInputEmail1">Post Title (Required)</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="" required value="{{ old('title') ?? '' }}">
                                    @error('title')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group"> <label Passwordfor="exampleInputPassword1">Post Body
                                        (Required)</label>
                                    <textarea id="" cols="30" rows="10" class="form-control" name="body"
                                        required>{{ old('body') ?? '' }}</textarea>
                                    @error('body')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group"> <label for="exampleInput">Post Category (Required)</label>
                                    <select name="category" id="exampleInput" class="form-control" required
                                        style="padding: 0px">
                                        <option value="">Select the Post Category</option>
                                        <option value="sports">Sports</option>
                                        <option value="tech">Tech</option>
                                        <option value="business">Business</option>
                                        <option value="gist">Gist/Gossip</option>
                                        <option value="entertainment">Entertainment</option>
                                        <option value="education">Education</option>
                                        <option value="politics">Politics</option>
                                        <option value="blog">Blog</option>
                                    </select>
                                    @error('category')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group"> <label for="exampleInputFile">Picture (Required)</label> <input
                                        type="file" id="exampleInputFile" name="file" required>
                                    @error('file')
                                        <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                                    @enderror
                                </div> <br>
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
                    <h1 class="text-center">Posting Hint</h1>
                    <br>
                    <ul>
                        <li>To create a heading: 👉 #cen Text here ##cen</li>
                        <li>To place a word or sentence in center: 👉 #cen Text here ##cen</li>
                        <li>To make a word or sentence Bold: 👉 #b Text here ##b</li>
                        <li>To make a word or sentence Itallic: 👉 #i Text here ##i</li>
                        <li>To make a word or sentence underline: 👉 #u Text here ##u</li>
                        <li>To make an horizontal line: use #l</li>
                        <li>To create a code: 👉 #c Text here ##c for normal code. #ch Text here ##ch for html, #cc Text
                            here
                            ##cc for css and #cj Text here ##cj for js</li>
                        <li>To create an hyperlink: 👉 #a Link here a# Text to be displayed here ##a</li>
                        <li>To add an image: 👉 #img Picture name img# Picture link here ##img</li>
                        <li>To add an audio: 👉 #aud Audio link here ##aud</li>
                        <li> To create a blockquote: 👉 #q Text here ##q</li>
                        <li>To embed a youtube video: 👉 #embed ID of video here ##embed</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
        <!-- //inner_content_w3_agile_info-->
    </div>
    <!-- //inner_content-->
@endsection

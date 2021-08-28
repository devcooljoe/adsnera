@extends('layouts.dashboard-app')

@section('title')
    <title>New Post - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

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
                <h3 class="w3_inner_tittle two">Create New Post</h3>
                <div class="form-body">
                    <form method="post" autocomplete="off" action="/posts/new" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"> <label for="exampleInputEmail1">Post Title (Required)</label> <input
                                type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder=""
                                required value="{{ old('title') ?? '' }}">
                            @error('title')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label Passwordfor="exampleInputPassword1">Post Body
                                (Required)</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" name="body"
                                required>{{ old('body') ?? '' }}</textarea>
                            @error('body')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="exampleInput">Post Category (Required)</label>
                            <select name="category" id="exampleInput" class="form-control" required style="padding: 0px">
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
                        <div class="form-group"> <label for="exampleInputFile">Picture (Required)</label> <input type="file"
                                id="exampleInputFile" name="file" required>
                            @error('file')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <button type="submit" class="btn btn-default">Add Post</button>
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

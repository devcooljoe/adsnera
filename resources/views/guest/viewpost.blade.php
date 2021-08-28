<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-quiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ route('index') }}/board/css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="apple-touch-icon" sizes="48x48" href="{{ route('index') }}/images/icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ route('index') }}/images/icon.png">
    <link rel="manifest" href="https://www.newstractor.com.ng/storage/assets/default/manifest.json">
    <link rel="shortcut-icon" href="https://www.newstractor.com.ng/storage/assets/default/comp-icon.png"
        type="image/jpg">
    <meta name="theme-color" content="#1e2d3a">
    <title>{{ $post->title }}</title>
    <meta name="keyword" content="increase, your, whatsapp, status, views, in , just, one, step, newstractor">
    <meta name="description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="og:locale" content="en_EN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="og:url" content="{{ route('index') }}">
    <meta property="og:site_name" content="Wassapgains">
    <meta property="og:image" content="{{ route('index') }}/images/icon.png">
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="450">
    <meta property="og:image:alt" content="{{ $post->title }}">
    <meta property="article:tag" content="increase, your, whatsapp, status, views, in , just, one, step, newstractor">
    <meta property="article:section" content="wassapgains">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="{{ $post->title }}">
    <meta property="twitter:description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="twitter:url" content="{{ route('index') }}">
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png">
    <meta property="twitter:image:width" content="800">
    <meta property="twitter:image:height" content="450">
    <meta property="twitter:image:alt" content="{{ $post->title }}">
    <link rel="image_src" href="{{ route('index') }}/images/icon.png">
    <meta itemprop="image" content="{{ route('index') }}/images/icon.png">
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/icon.png">
    <style>
        html {
            -webkit-scroll-behavior: smooth;
            scroll-behavior: smooth
        }

        body {
            font-family: 'Noto Sans JP';
            font-size: 18px;
            -webkit-scroll-behavior: smooth;
            scroll-behavior: smooth
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Noto Sans JP'
        }

        footer {
            width: 100%;
            color: #a8a8a8;
            background-color: #1e2d3a;
            padding: 10px;
            font-size: 15px;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-inverse" style="background-color: #1e2d3a; border-radius:0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ route('index') }}/images/logo.png"
                        class="img-responsive" alt="" style="width: 25px;"></a>
            </div>
            <div class="collapse navbar-collapse pull-right" id="myNavbar">
                <ul class="nav navbar-nav">

                    @guest()
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    @else
                        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="/account/profile"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="/posts/new"><i class="fa fa-plus"></i> Create new post</a></li>
                    @endguest
                    <li><a href="/posts"><i class="fa fa-file-o"></i> Posts</a></li>
                </ul>
                @guest()`
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                @endguest
            </div>
        </div>
    </nav>

    <div class="row" style="padding:15px;background-color:#e0e0e0">
        <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs"><br></div>
        <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div
                style="background-color:#f2fff5d3;padding:30px;border-radius:7px 7px 0px 0px; box-shadow: 0px 0px 1px 1px #c7c7c7;">
                <center>
                    <a href="http://bit.ly/3in1_training" target="_blank">
                        <img class="img img-responsive img-thumbnail" style="height:200px;"
                            src="https://i.ibb.co/LnBqbGF/IMG-20210817-WA0070.jpg">
                    </a>
                </center>
                <hr>
                <a href="#" style="text-decoration: none">
                    <h3 style="color: #12b797">{{ $post->title }}</h3>
                </a>
                <span style="font-size:12px;">
                    Post by {{ $post->user()->first()->name }} &bullet; {{ App\Custom::date($post->created_at) }}
                </span>
                <br><br>
                <p class="text-center"><img class="img img-responsive img-thumbnail" style="width:80%"
                        src="https://i.ibb.co/c1FRrW5/Add-Text-08-14-08-52-59.jpg"></p><br>

                <p style="font-size: 15px;">{{ $post->body }}</p>

            </div>
            <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs"><br></div>
            <footer style="width: 100%; border-radius:0px 0px 7px 7px;">
                <p>Powered by Adsnera</p>
                <p><a href="mailto:support@adsnera.com">support@adsnera.com</a></p>
            </footer>

            <script>
                $('#button').click(function() {
                    $('#myNavbar').removeClass('pull-right');
                });
            </script>
</body>

</html>

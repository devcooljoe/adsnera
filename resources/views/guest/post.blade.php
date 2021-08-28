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
    <title>Adsnera - The Biggest and Legit Social Media Maketing Platform</title>
    <meta name="keyword" content="increase, your, whatsapp, status, views, in , just, one, step, newstractor">
    <meta name="description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="og:locale" content="en_EN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Adsnera - The Biggest and Legit Social Media Maketing Platform">
    <meta property="og:description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="og:url" content="{{ route('index') }}">
    <meta property="og:site_name" content="Wassapgains">
    <meta property="og:image" content="{{ route('index') }}/images/icon.png">
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="450">
    <meta property="og:image:alt" content="Adsnera - The Biggest and Legit Social Media Maketing Platform">
    <meta property="article:tag" content="increase, your, whatsapp, status, views, in , just, one, step, newstractor">
    <meta property="article:section" content="wassapgains">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Adsnera - The Biggest and Legit Social Media Maketing Platform">
    <meta property="twitter:description"
        content="Get more WhatsApp Status Views. You can grow your audience as you and other participants gets to save each others contact.">
    <meta property="twitter:url" content="{{ route('index') }}">
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png">
    <meta property="twitter:image:width" content="800">
    <meta property="twitter:image:height" content="450">
    <meta property="twitter:image:alt" content="Adsnera - The Biggest and Legit Social Media Maketing Platform">
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

    <nav class="navbar navbar-inverse" style="background-color: #1e2d3a">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ route('index') }}/images/logo.png"
                        class="img-responsive" alt="" style="width: 25px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    @guest()
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    @else
                        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="/account/profile"><i class="fa fa-user"></i> Profile</a></li>
                    @endguest

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
            <div style="background-color:#f2fff5d3;padding:30px;border-radius:7px">
                <center>
                    <a href="http://bit.ly/3in1_training" target="_blank">
                        <img class="img img-responsive img-thumbnail" style="height:200px;"
                            src="https://i.ibb.co/LnBqbGF/IMG-20210817-WA0070.jpg">
                    </a>
                </center>
                @foreach ($posts as $post)
                    <hr> <i class="fa fa-angle-right"></i>
                    <a href="/posts/{{ $post->id }}" style="text-decoration: none;">
                        <span style="color: #12b797; font-size:14px;font-weight:bolder;">{{ $post->title }}</span>
                    </a>
                    <br>
                    <span style="font-size:12px; float: right;">Post by {{ $post->user()->first()->name }}
                        &bullet; {{ \App\Custom::date($post->created_at) }}</span>
                @endforeach
                <br>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs"><br></div>
            <footer style="width: 100%; border-radius:0px 0px 7px 7px;">
                <p>Powered by Adsnera</p>
                <p><a href="mailto:support@adsnera.com">support@adsnera.com</a></p>
            </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    @yield('title')

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1e2d3a">
    <link rel="apple-touch-icon" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="shortcut-icon" href="{{ route('index') }}/images/logo.png" type="image/png">
    <link href="{{ route('index') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/themes/prism.min.css" />
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"
        integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous">
    </script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ route('index') }}/blog/css/theme-1.css">
    <style>
        body,
        p,
        span,
        a,
        h1,
        h2,
        h3,
        strong {
            font-family: "Noto Sans JP";
        }

    </style>

</head>

<body>
    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="/posts">Adsnera Blog</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto"
                        src="{{ route('index') }}/board/images/avatar.png" alt="image">

                    <div class="bio mb-3">The Biggest and Legit Social Media Maketing Platform.<br><a
                            href="{{ route('index') }}#about">Find out more about us</a></div>
                    <!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/adsnera"><i
                                    class="fab fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/adsnera"><i
                                    class="fab fa-instagram fa-fw"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://www.twitter.com/adsnera"><i
                                    class="fab fa-twitter fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <hr>
                </div>
                <!--//profile-section-->

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="/posts"><i class="fas fa-file fa-fw mr-2"></i> Posts
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home fa-fw mr-2"></i>Home</a>
                    </li>
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt fa-fw mr-2"></i> Login</a>
                        </li>
                    @endguest
                </ul>

                <div class="my-2 my-md-3">
                    <a class="btn btn-primary" href="/contact" target="_blank">Get in Touch</a>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')


    <footer class="footer text-center py-2 theme-bg-dark">

        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">&copy; Adsnera,
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved.</small>

    </footer>

    </div>
    <!--//main-wrapper-->




    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i
                    class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6"></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-1.css"
                        href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-2.css"
                        href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-3.css"
                        href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-4.css"
                        href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-5.css"
                        href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-6.css"
                        href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-7.css"
                        href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="{{ route('index') }}/blog/css/theme-8.css"
                        href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div>
        <!--//panel-inner-->
    </div>
    <!--//configure-panel-->



    <!-- Javascript -->
    <script src="{{ route('index') }}/blog/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{ route('index') }}/blog/plugins/popper.min.js"></script>
    <script src="{{ route('index') }}/blog/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ route('index') }}/blog/js/demo/style-switcher.js"></script>
    <script id="dsq-count-scr" src="//adsnera.disqus.com/count.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-613b3784a71dbdd8"></script>
</body>

</html>

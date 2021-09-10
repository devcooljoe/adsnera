<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-quiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1e2d3a">
    <!-- Custom Theme files -->
    <link href="{{ route('index') }}/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="{{ route('index') }}/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ route('index') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- //online-fonts -->
    <link rel="apple-touch-icon" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="shortcut-icon" href="{{ route('index') }}/images/logo.png" type="image/png">

    @yield('title')

</head>

<body>

    <!-- header -->
    <header class="index-banner">
        <!-- nav -->
        <nav class="main-header">
            <div id="brand">
                <a href="/">
                    <img src="{{ route('index') }}/images/logo.png" alt="" class="img img-responsive"
                        style="width: 60px;">
                </a>
                <div id="word-mark">
                    <h1>
                        <a href="/">Adsnera</a>
                    </h1>
                </div>
            </div>
            <div id="menu">
                <div id="menu-toggle">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="text-center text-capitalize nav-agile">
                    <li>
                        <a href="/posts">Posts</a>
                    </li>
                    @guest
                        <li>
                            <a href="{{ route('index') }}" class="active">home</a>
                        </li>
                        <li>
                            <a href="#about">about</a>
                        </li>
                        <li>
                            <a href="#services">services</a>
                        </li>
                        <li>
                            <a href="#faqs">FAQs</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('contact') }}">contact</a>
                        </li> --}}
                        <li>
                            <a class="active" href="{{ route('register') }}" id="register-link">Register</a>
                        </li>
                        <li>
                            <a class="active" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ auth()->user()->advertiser()
    ? '/advertiser/dashboard'
    : '/promoter/dashboard' }}"
                                class="active">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>
        <!-- //nav -->
        <!-- banner -->
        <div id="hero-section">
            <!-- banner text responsive slider -->
            <div class="banner-text">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <h3>Promote,<br> We Pay You</h3>
                                <p>Earn up to ₦500 - ₦5,000 daily <br> by sharing adverts.</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Advertise, <br> Right Audience</h3>
                                <p>Reach the right audience <br> with our targeting tools.</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Advertise, <br> Value for Money</h3>
                                <p>With our advanced algorithm, <br> we are able to detect fraudulent leads, <br> and
                                    you don't
                                    get charged for it.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container" style="margin: 30px;">
                    <button style="padding:20px;" type="button" class="btn w3ls-btn"
                        onclick="document.getElementById('register-link').click()">
                        <span style="padding: 30px; font-size:20px; font-weight:bold;">GET STARTED</span>
                    </button>
                </div>

            </div>
            <!-- banner text responsive slider -->
        </div>
        <!-- //banner -->
    </header>
    <!-- //header -->


    @yield('content')



    <!-- footer -->
    <div class="footer-w3ls">
        <div class="footer-dot">
            <div class="container">
                <div class="contact-center">
                    <div class="footer-logo my-sm-5 mb-sm-5 mb-3 text-center">
                        <h2>
                            <a href="/">
                                <img src="{{ route('index') }}/images/logo.png" alt="" class="img img-responsive"
                                    style="width: 60px;">
                                Adsnera
                            </a>
                        </h2>
                        <p class="px-lg-5 pt-lg-5 pt-3 text-white">Building a beloved brand is not simply about the
                            product or service a business sells, but the connections it makes with the people who love
                            and trust it. At Adsnera, we believe there’s nowhere that is more important today than on
                            social media. And we have created an exciting and cost effective way for brands to reach
                            those customers.</p>
                    </div>
                    <div class="row border-top">
                        <div class="col-lg-6 footer-grid">
                            <div class="justify-content-center contact-g2 mx-auto">
                                <h6 class="footer-wthree">Follow us</h6>
                                <div class="address-grid">
                                    <ul class="social-icons3">
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/adsnera"
                                                class="s-iconfacebook">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.twitter.com/adsnera"
                                                class="s-icontwitter">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/adsnera"
                                                class="s-icondribbble">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 border-left footer-grid">
                            <div class="subscribe-grid">
                                <h6 class="footer-wthree">Signup to our newsletter.</h6>
                                <form action="/subscribe" method="post" class="form-inline">
                                    @csrf
                                    <input type="email" placeholder="Your Email" name="email" required="">
                                    <button class="btn1">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="cpy-right text-center py-4">
        <p class="text-white">&copy; Adsnera,
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved.
        </p>
    </div>
    <!-- //footer -->

    <script src="{{ route('index') }}/js/jquery-2.2.3.min.js"></script>
    <!-- Banner Responsiveslides -->
    <script src="{{ route('index') }}/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Flexslider-js for-testimonials -->
    <script src="{{ route('index') }}/js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- sticky nav bar-->
    <script>
        $(() => {

            //On Scroll Functionality
            $(window).scroll(() => {
                var windowTop = $(window).scrollTop();
                windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top',
                    '160px');
            });

            //Click Logo To Scroll To Top
            $('#logo').on('click', () => {
                $('html,body').animate({
                    scrollTop: 0
                }, 500);
            });

            //Smooth Scrolling Using Navigation Menu
            $('a[href*="#"]').on('click', function(e) {
                $('html,body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 100
                }, 500);
                e.preventDefault();
            });

            //Toggle Menu
            $('#menu-toggle').on('click', () => {
                $('#menu-toggle').toggleClass('closeMenu');
                $('ul').toggleClass('showMenu');

                $('li').on('click', () => {
                    $('ul').removeClass('showMenu');
                    $('#menu-toggle').removeClass('closeMenu');
                });
            });

        });
    </script>
    <!-- //sticky nav bar -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
             var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear' 
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ route('index') }}/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- start-smooth-scrolling -->
    <script src="{{ route('index') }}/js/move-top.js"></script>
    <script src="{{ route('index') }}/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- script for password match -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->



    <script type="text/javascript">
        $('#custom-alert-close').click(function() {
            $('#custom-alert').slideToggle();
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ route('index') }}/js/bootstrap.js">
    </script>
    <script src="{{ route('index') }}/js/custom.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-613b3784a71dbdd8"></script>
    <!-- //Bootstrap Core JavaScript -->
</body>

</html>

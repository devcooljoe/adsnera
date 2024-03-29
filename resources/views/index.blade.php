@extends('layouts.app')


@section('title')
    <title>Adsnera - The Biggest and Legit Social Media Maketing Platform</title>
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Adsnera - The Biggest and Legit Social Media Maketing Platform" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/logo.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Adsnera - The Biggest and Legit Social Media Maketing Platform" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Adsnera - The Biggest and Legit Social Media Maketing Platform" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/logo.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Adsnera - The Biggest and Legit Social Media Maketing Platform" />
    <link rel="image_src" href="{{ route('index') }}/images/logo.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/logo.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/logo.png" />
@endsection


@section('content')

    <!-- about -->
    <section id="section00">
        <div id="heading">
            <!-- about -->
            <div class="agileits-wthree-about py-md-5 py-4" id="wthree-about">
                <div class="container py-lg-5" id="about">
                    <div class="text-center wthree-title pb-sm-5 pb-3">
                        <h4 class="w3l-sub">About Us</h4>
                        <h5 class="sub-title py-3">The Biggest and Legit Social Media Maketing Platform</h5>
                        <h5 class="sub-title py-3">With Automatic
                            Payment and Withdrawal Services</h5><span></span>
                    </div>

                    <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                        <div class="col-lg-4">
                            <div class="agileits-wthree-about-grids">
                                <span class="fas fa-chart-area"></span>
                                <h4 class="my-2">Advertise With Us
                                </h4>
                                <p>Do you have a product or service you want to promote? Advertise with
                                    us and reach thousands of users on our social media marketer's networks.</h5>
                                </p>
                                <div class="row mt-lg-4 pt-md-4">
                                    <div class="img-responsive">
                                        <div class="abt-block">
                                            <h3 style="color: white;font-weight:bolder;">Cost Effective</h3>
                                            <p class="img-responsive">Starting from as little as ₦1 per Lead, we provide
                                                you
                                                with a cost efficient way
                                                of pushing your business and services to the eyes of willing customers. With
                                                ₦1,000, your advert/campaign will reach 1,000 - 3,000 people.</p>
                                            </p>
                                            <p style="color: white;font-weight:bold;">Register as an "Advertiser" to get
                                                started.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <br>
                        </div>
                        <div class="col-lg-4">
                            <div class="agileits-wthree-about-grids">
                                <span class="fas fa-money-bill-alt"></span>
                                <h4 class="my-2">Earn With Us
                                </h4>
                                <p>Do you have 500+ active Instagram followers, 50+ views on your whatsapp status, Telegram
                                    or any other
                                    social media audience? Become a marketer
                                    and get paid for sharing sponsored posts online.</p>
                                <div class="row mt-lg-4 pt-md-4">
                                    <div class="img-responsive">
                                        <div class="abt-block">
                                            <h3 style="color: white;font-weight:bolder;">Earn Your Revenue</h3>
                                            <p class="img-responsive">Earn from as much as ₦3,500 - ₦25,000 weekly,
                                                promoting businesses online. Also earn ₦250 per referral i.e, for each
                                                active user you bring to register on
                                                Adsnera.</p>
                                            <p style="color: white;font-weight:bold;">Register as a "Promoter" to get
                                                started.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center" style="margin: 30px;">
                        <button style="padding:20px;" type="button" class="btn w3ls-btn"
                            onclick="document.getElementById('register-link').click()">
                            <span style="padding: 30px; font-size:20px; font-weight:bold;">REGISTER NOW</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- //about -->
        </div>
    </section>
    <!-- //about -->
    <!-- progress bars -->
    <div class="py-lg-5 progress-bar-sec">
        <div class="container py-5" id="services">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub text-white">Our Services</h4>
                <h5 class="sub-title py-3 text-white">Join Others On This Platform to Earn or Advertise.</h5>
                <span></span>
            </div>
            <div class="row  no-gutters abbot-grid2 py-lg-5">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 progress_agile">
                    <div class="progress-outer mt-3">
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:99%;">
                            </div>
                            <div class="progress-value">100%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Advertising</h6>
                    </div>
                    <div class="progress-outer  my-4">
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:90%;">
                            </div>
                            <div class="progress-value">100%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Earning</h6>
                    </div>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:85%;">
                            </div>
                            <div class="progress-value">100%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Management</h6>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </div>
    <!-- //progress bars -->
    {{-- <!-- team -->
    <section class="team py-lg-5" id="team">
        <div class="container py-sm-5 pt-4 pb-3">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">our team</h4>
                <h5 class="sub-title py-3">Donec consequat sapien ut leo cursus rhoncus.</h5>
                <span></span>
            </div>
            <div class="row my-sm-5">
                <div class="col-lg-4 col-sm-6">
                    <div class="box16">
                        <img src="images/t3.jpg" alt="" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">consequat</span>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box16">
                        <img src="images/t1.jpg" alt="" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">consectetur</span>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mx-auto mt-lg-0 mt-sm-5">
                    <div class="box16">
                        <img src="images/t2.jpg" alt="" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">stianry jack</h3>
                            <span class="post">consectetur</span>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-2"></div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box16">
                        <img src="images/t4.jpg" alt="" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">sapienana</h3>
                            <span class="post">consectetur</span>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box16">
                        <img src="images/t6.jpg" alt="" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">michael</h3>
                            <span class="post">consectetur</span>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- //team -->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5 text-center">
        <div class="container py-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">our blog</h4>
                <h5 class="sub-title py-3">Donec consequat sapien ut leo cursus rhoncus.</h5>
                <span></span>
            </div>
            <div class="row py-md-5">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                role="button">
                                <img class="card-img-bottom" src="images/b1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal2" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal2" role="button">Cras ultricies ligula sed magna dictum
                                        porta auris blandita.</a>
                                </h5>
                            </div>
                            <button type="button" class="btn blog-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                role="button">
                                <img class="card-img-bottom" src="images/b2.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal3" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal3" role="button">Cras ultricies ligula sed magna dictum
                                        porta auris blandita.</a>
                                </h5>
                            </div>
                            <button type="button" class="btn blog-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                role="button">
                                <img class="card-img-bottom" src="images/b3.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal4" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal4" role="button">Cras ultricies ligula sed magna dictum
                                        porta auris blandita.</a>
                                </h5>
                            </div>
                            <button type="button" class="btn blog-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal4">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog --> --}}
    <!-- testimonials -->
    <div class="testimonials" id="testimonials">
        <div class="container-fluid p-0">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">testimonials</h4>
                <h5 class="sub-title py-3">See testimonies from our Advertisers and Promoterss.</h5>
                <span></span>
            </div>
            <ul id="flexiselDemo1" class="pt-lg-0 pt-5">
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="row">
                            <div class="col-lg-6 wthree_testimonials_grid">
                                <p>
                                    I am working with Adsnera. The platform is easy to use and optimize your
                                    campaign and for me it's 100% best. I am happy to recommend
                                    Adsnera as one of the few networks you don't want to miss if you are looking for
                                    high quality audience and excellent customer support!

                                </p>
                                <div class="wthree_testimonials_grid_pos">
                                    <div class="row">
                                        <div class="col-3 grid-test-w3l">
                                            <img src="/board/images/avatar.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="col-9 wthree_testimonials_grid1">
                                            <h5>Victor</h5>
                                            <p>Advertiser</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  wthree_testimonials_grid mt-lg-0 mt-5">
                                <p>
                                    I've have been working with Adsnera for some time now. I must say
                                    Adsnera is definitely one of the top networks I have ever worked with. Their account
                                    manager Samuel is always helpful, willing to try to scale the activities with new
                                    offers. Payment and billing format is so perfect. I hope there will be many more
                                    successful years to come.

                                </p>
                                <div class="wthree_testimonials_grid_pos">
                                    <div class="row">
                                        <div class="col-3 grid-test-w3l">
                                            <img src="/board/images/avatar.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="col-9 wthree_testimonials_grid1">
                                            <h5>Glory</h5>
                                            <p>Advertiser</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="row">
                            <div class="col-lg-6 wthree_testimonials_grid">
                                <p>
                                    I've been working closely with Adsnera and I couldn't be happier with our
                                    partnership, as the high amount of traffic at fair rates makes a good match with our
                                    needs. Our account managers at Adsnera have always been professional, responsive and
                                    attentive to our requests which makes for a great working relationship!
                                </p>
                                <div class="wthree_testimonials_grid_pos">
                                    <div class="row">
                                        <div class="col-3 grid-test-w3l">
                                            <img src="/board/images/avatar.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="col-9 wthree_testimonials_grid1">
                                            <h5>John</h5>
                                            <p>Promoter</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  wthree_testimonials_grid mt-lg-0 mt-5">
                                <p>
                                    I've have been working with Adsnera for some time now. I must say
                                    Adsnera is definitely one of the top networks I have ever worked with. Their account
                                    manager Samuel is always helpful, willing to try to scale the activities with new
                                    offers. Payment and billing format is so perfect. I hope there will be many more
                                    successful years to come.
                                </p>
                                <div class="wthree_testimonials_grid_pos">
                                    <div class="row">
                                        <div class="col-3 grid-test-w3l">
                                            <img src="/board/images/avatar.png" alt=" " class="img-fluid" />
                                        </div>
                                        <div class="col-9 wthree_testimonials_grid1">
                                            <h5>Glory</h5>
                                            <p>Advertiser</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //testimonials -->
    {{-- <!-- FAQS -->
    <div class="agileits-wthree-about py-md-5 py-4" id="wthree-about">
        <div class="container py-lg-5" id="faqs">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">FAQs</h4>
                <h5 class="sub-title py-3">Check out our frequently asked questions.</h5><span></span>
            </div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                <div class="asked agile_info_shadow" style="padding-left:50px; padding-right: 50px;">
                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>1. What is Lorem Ipsum?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Lorem Ipsum is simply dummy text of the printing
                            and typesetting
                            industry. Lorem
                            Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>2. What is Lorem Ipsum dummy text ever since the 1500s?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and
                            scrambled it to make a type specimen book.</p>
                    </div>

                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>3. What is Duis laoreet, erat quis gravida porttitor odio felis ornare dui?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia Curae; Nam
                            semper elit
                            risus, nec suscipit tellus tincidunt quis. Fusce non auctor enim. Suspendisse sit amet erat
                            mollis,
                            suscipit nisl sed, condimentum turpis. Curabitur faucibus, nisl ut aliquam porta, massa tortor
                            tristique
                            dolor, eget porttitor velit ligula vel eros. Sed egestas aliquet tellus. Nulla ac luctus urna.
                            Pellentesque feugiat eros quis nibh consectetur, eget dapibus magna egestas. Phasellus non
                            efficitur
                            metus.</p>
                    </div>

                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>4. What is Quisque sollicitudin diam vel mauris volutpat viverra Proin ac imperdiet libero?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Proin dignissim mi sit amet tincidunt varius.
                            Quisque molestie fermentum dignissim. Sed in urna
                            eget
                            tortor congue tempus. Vestibulum gravida, erat in eleifend ultricies, felis lorem dictum nulla,
                            ut
                            tincidunt neque libero et nibh. Nullam at eros eu ligula auctor interdum a eget lorem. Praesent
                            molestie
                            eros vitae felis efficitur, at finibus sem molestie. Ut sit amet nisi at nunc pulvinar dapibus.
                            Sed non
                            neque et tortor finibus mattis. Mauris sit amet consectetur eros. Sed et ex posuere, vulputate
                            dolor
                            vel, pulvinar felis. </p>
                    </div>
                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>5. What is Nam semper elit risus, nec suscipit tellus tincidunt quis?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>6. What is Quisque molestie fermentum dignissim?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Sed eget nunc ex. Donec erat est, dapibus ac massa
                            in, laoreet sagittis eros. Aliquam eget arcu
                            feugiat
                            leo elementum tristique. Praesent facilisis aliquam lorem sed pharetra. Donec scelerisque ipsum
                            vel
                            tincidunt gravida. Aliquam erat volutpat. Etiam mattis rhoncus massa, quis semper purus ornare
                            id.
                            Quisque sit amet mattis ipsum, in porttitor massa. Nullam tincidunt mi vel enim volutpat, a
                            elementum
                            libero imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tincidunt
                            eros eu
                            nisl consequat facilisis. Maecenas ac accumsan elit, sit amet gravida nulla.</p>
                    </div>
                    <div class="questions" style="margin-bottom: 20px;">
                        <h5>7. What is Vestibulum ante ipsum primis in faucibus orci luctus et?</h5>
                        <p style="margin-left: 30px;font-weight:lighter;">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and
                            scrambled it to make a type specimen book.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //FAQS --> --}}


@endsection

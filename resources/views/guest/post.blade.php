@extends('layouts.blog-app')

@section('title')
    <title>Adsnera Blog</title>
    <meta name="keyword" content="social, marketing, platform, nigeria, worldwide, promote, advertise, campaign" />
    <meta name="description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts.">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Adsnera Blog" />
    <meta property="og:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/images/icon.png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="Adsnera Blog" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="Adsnera Blog" />
    <meta property="twitter:description"
        content="Advertise, Right Audience Reach the right audience with our targeting tools. Promote, We Pay You, Earn up to ₦500 - ₦5,000 daily by sharing adverts." />
    <meta property="twitter:url" content="{{ route('index') }}" />
    <meta property="twitter:image" content="{{ route('index') }}/images/icon.png" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="Adsnera Blog" />
    <link rel="image_src" href="{{ route('index') }}/images/icon.png" />
    <meta itemprop="image" content="{{ route('index') }}/images/icon.png" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/images/icon.png" />
@endsection

@section('content')
    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">Adsnera - Global Breaking news updates, Latest news headlines</h2>
                <div class="intro">Welcome to our blog. Subscribe and get our latest news/blog post in your inbox.
                </div>
                <form class="signup-form form-inline justify-content-center pt-3" action="/subscribe" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="email" class="form-control mr-md-1 semail"
                            placeholder="Enter email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
            <!--//container-->
        </section>
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">

                @foreach ($posts as $post)
                    <div class="item mb-5">
                        <div class="media">
                            <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                                src="{{ route('index') }}/storage/{{ $post->picture }}" alt="image">
                            <div class="media-body">
                                <h3 class="title mb-1"><a
                                        href="{{ route('index') }}/posts/{{ $post->custom_id }}">{{ $post->title }}</a>
                                </h3>
                                <div class="meta mb-1"><span class="date">Published by
                                        {{ $post->user()->first()->name }}</span><span
                                        class="time">{{ App\Custom::date($post->created_at) }}</span></div>
                                <div class="intro">{{ App\Custom::filterPost(substr($post->body, 0, 400)) }}...
                                </div>
                                <a class="more-link"
                                    href="{{ route('index') }}/posts/{{ $post->custom_id }}">Read
                                    more
                                    &rarr;</a>
                            </div>
                            <!--//media-body-->
                        </div>
                        <!--//media-->
                    </div>
                    <!--//item-->
                @endforeach

                @if ($page_num >= 1)
                    <nav class="blog-nav nav nav-justified my-5">
                        @if ($page - 1 >= 0)
                            <a class="nav-link-prev nav-item nav-link rounded-left"
                                href="/posts?page={{ $page - 1 }}">Previous<i
                                    class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                        @endif
                        @if ($page + 1 <= $page_num)
                            <a class="nav-link-next nav-item nav-link rounded"
                                href="/posts?page={{ $page + 1 }}">Next<i
                                    class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                        @endif
                    </nav>
                @endif

            </div>
        </section>
    @endsection

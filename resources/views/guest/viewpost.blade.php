@extends('layouts.blog-app')

@section('title')
    <title>{{ $post->title }}</title>
    <meta name="keyword" content="{{ preg_replace('/ /', ', ', substr($post->title, 0, 200)) }}" />
    <meta name="description" content="{{ substr($post->body, 0, 400) }}">
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ substr($post->body, 0, 400) }}" />
    <meta property="og:url" content="{{ route('index') }}/posts/{{ $post->custom_id }}" />
    <meta property="og:site_name" content="Adsnera" />
    <meta property="og:image" content="{{ route('index') }}/storage/{{ $post->picture }}" />
    <meta property="og:image:secure_url" content="{{ route('index') }}/storage/{{ $post->picture }}" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta property="og:image:alt" content="{{ $post->title }}" />
    <meta property="article:tag" content="{{ preg_replace('/ /', ', ', substr($post->title, 0, 200)) }}" />
    <meta property="article:section" conqtent="{{ $post->category }}" />
    <meta property="article:published_time" content="{{ $post->created_at }}" />
    <meta property="article:modified_time" content="{{ $post->updated_at }}" />
    <meta property="article:author" content="{{ $post->user()->first()->name }}" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="{{ $post->title }}" />
    <meta property="twitter:description" content="{{ substr($post->body, 0, 400) }}" />
    <meta property="twitter:url" content="{{ route('index') }}/posts/{{ $post->custom_id }}" />
    <meta property="twitter:image" content="{{ route('index') }}/storage/{{ $post->picture }}" />
    <meta property="twitter:image:width" content="800" />
    <meta property="twitter:image:height" content="450" />
    <meta property="twitter:image:alt" content="{{ $post->title }}" />
    <link rel="image_src" href="{{ route('index') }}/storage/{{ $post->picture }}" />
    <meta itemprop="image" content="{{ route('index') }}/storage/{{ $post->picture }}" />
    <meta name="msapplication-TileImage" content="{{ route('index') }}/storage/{{ $post->picture }}" />
@endsection


@section('content')
    <div class="main-wrapper">
        <figcaption class="mt-2 pl-3 image-caption" style="text-decoration: underline">Sponsored Ad...</figcaption>
        @if ($advert != null)
            <a href="{{ $advert->link }}" target="_blank">
                <img src="{{ route('index') }}/storage/{{ $advert->picture }}" class="img-responsive"
                    style="width: 100%; max-height:450px" alt="">
            </a>
        @else
            <a href="{{ route('index') }}" target="_blank">
                <img src="{{ route('index') }}/images/ads.png" class="img-responsive" style="width: 100%; max-height:450px"
                    alt="">
            </a>
        @endif
        <article class="blog-post px-3 py-5 p-md-5">
            <div class="container">
                <header class="blog-post-header">
                    <h2 class="title mb-2">{{ $post->title }}</h2>
                    <div class="meta mb-3"><span class="date">Published by
                            {{ $post->user()->first()->name }}</span><span
                            class="time">{{ App\Custom::date($post->created_at) }}</span><a
                            href="{{ route('index') }}/posts/{{ $post->custom_id }}#disqus_thread"></a></div>
                </header>

                <div class="blog-post-body">
                    <figure class="blog-banner">
                        <a href="{{ route('index') }}/posts/{{ $post->custom_id }}"><img class="img-fluid"
                                src="{{ route('index') }}/storage/{{ $post->picture }}" alt="image"></a>
                        <figcaption class="mt-2 text-center image-caption"></figcaption>
                    </figure>
                    <br>
                    <div class="addthis_inline_share_toolbox"></div>
                    <br>
                    <span style="white-space: pre-wrap;">{!! App\Custom::customizePost($post->body) !!} </span>
                </div>
                <br>
                <section class="cta-section theme-bg-light py-5">
                    <div class="container text-center">
                        <div class="intro">Like this content? Get them right in your inbox! We
                            assure
                            you that there will be no spams. You will receive a mail only when there's an important update.
                            Subscribe now & never miss an offer again.
                        </div>
                        <form class="signup-form form-inline justify-content-center pt-3" action="/subscribe"
                            method="post">
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
                <div class="blog-comments-section">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://adsnera.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
                <!--//blog-comments-section-->

            </div>
            <!--//container-->
        </article>

        <section class="promo-section theme-bg-light py-5 text-center">
            <div class="container">
                <h2 class="title">Promotion Section</h2>
                <p>You can use this section to promote your business and make it go viral. </p>
                <figure class="promo-figure">
                    <a href="{{ route('index') }}/register" target="_blank"><img class="img-fluid"
                            src="{{ route('index') }}/blog/images/promo-banner.jpg" alt="image"></a>
                </figure>
            </div>
            <!--//container-->
        </section>
        <!--//promo-section-->
    @endsection

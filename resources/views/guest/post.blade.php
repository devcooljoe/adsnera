@extends('layouts.blog-app')

@section('title')
    <title>Adsnera - The Biggest and Legit Social Media Maketing Platform</title>
@endsection

@section('content')
    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">Adsnera - Global Breaking news updates, Latest news headlines</h2>
                <div class="intro">Welcome to our blog. Subscribe and get our latest news/blog post in your inbox.
                </div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                            placeholder="Enter email">
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
                                src="{{ route('index') }}/blog/images/blog/blog-post-thumb-1.jpg" alt="image">
                            <div class="media-body">
                                <h3 class="title mb-1"><a
                                        href="{{ route('index') }}/posts/{{ $post->custom_id }}">{{ $post->title }}</a>
                                </h3>
                                <div class="meta mb-1"><span class="date">Published by
                                        {{ $post->user()->first()->name }}</span><span
                                        class="time">{{ App\Custom::date($post->created_at) }}</span></div>
                                <div class="intro">{{ substr($post->body, 0, 400) }}...</div>
                                <a class="more-link" href="{{ route('index') }}/posts/{{ $post->custom_id }}">Read
                                    more
                                    &rarr;</a>
                            </div>
                            <!--//media-body-->
                        </div>
                        <!--//media-->
                    </div>
                    <!--//item-->
                @endforeach

                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                            class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i
                            class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        </section>
    @endsection

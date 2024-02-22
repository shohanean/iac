@extends('layouts.front')

@section('blogs')
    current
@endsection

@section('content')
    <!-- Start main-content -->
    <section class="page-title"
        style="background-image: url({{ asset('frontend_assets') }}/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Blog Details</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li>{{ $blog->heading }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset('uploads') }}/{{ $blog->image }}" alt="not found">
                            <div class="blog-details__date">
                                <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->format('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="news-details.html"><i class="fas fa-user-circle"></i>
                                        {{ $blog->user->name }}</a> </li>
                                <li><a href="news-details.html"><i class="fas fa-comments"></i> 02
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-details__title">
                                {{ $blog->heading }}
                            </h3>
                            <p class="blog-details__text-2">
                                {{ $blog->details }}
                            </p>
                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Share Via:</span>
                            </p>
                            <div class="blog-details__social-list"> <a href="news-details.html"><i
                                        class="fab fa-twitter"></i></a> <a href="news-details.html"><i
                                        class="fab fa-facebook"></i></a> <a href="news-details.html"><i
                                        class="fab fa-pinterest-p"></i></a> <a href="news-details.html"><i
                                        class="fab fa-instagram"></i></a> </div>
                        </div>
                        {{-- <div class="nav-links">
                        <div class="prev">
                            <a href="news-details.html" rel="prev">True factors of the modern healthy lifestyle</a>
                        </div>
                        <div class="next">
                            <a href="news-details.html" rel="next">How to lead a healthy &amp; well-balanced life</a>
                        </div>
                    </div> --}}
                        <div class="comment-one">
                            <h3 class="comment-one__title">2 Comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image"> <img src="https://via.placeholder.com/145x145"
                                        alt=""> </div>
                                <div class="comment-one__content">
                                    <h3>Kevin Martin</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                        Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                        sollicitudin at euismod.
                                    </p>
                                    <a href="news-details.html"
                                        class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span
                                            class="btn-title">Reply</span></a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image"> <img src="https://via.placeholder.com/145x145"
                                        alt=""> </div>
                                <div class="comment-one__content">
                                    <h3>Sarah Albert</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                        Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                        sollicitudin at euismod.
                                    </p>
                                    <a href="news-details.html"
                                        class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span
                                            class="btn-title">Reply</span></a>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                @auth
                                    <form id="contact_form" name="contact_form" class=""
                                        action="{{ route('blogs.comment') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input class="form-control" type="text"
                                                        value="{{ auth()->user()->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input class="form-control required email" type="email"
                                                        value="{{ auth()->user()->email }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="comment" class="form-control required" rows="5" placeholder="Enter Comment"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="theme-btn btn-style-one"
                                                data-loading-text="Please wait..."><span class="btn-title">Submit
                                                    Comment</span></button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-warning">
                                        You have to <a href="{{ route('login') }}">login</a> or <a
                                            href="{{ route('register') }}">register</a> to comment
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        {{-- <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="lnr-icon-search"></i></button>
                        </form>
                    </div> --}}
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($latests as $latest)
                                    <li>
                                        <div class="sidebar__post-image"> <img
                                                src="{{ asset('uploads') }}/{{ $latest->image }}" alt=""> </div>
                                        <div class="sidebar__post-content">
                                            <h3> <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>{{ $latest->user->name }}</span> <a
                                                    href="{{ route('blogs.details', $latest->slug) }}">{{ $latest->heading }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <h3 class="sidebar__title">Recent Comments</h3>
                            <ul class="sidebar__comments-list list-unstyled">
                                <li>
                                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A wordpress commenter on <br>
                                            launch new mobile app
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                    <div class="sidebar__comments-text-box">
                                        <p> <span>John Doe</span> on template:</p>
                                        <h5>comments</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A wordpress commenter on <br>
                                            launch new mobile app
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                    <div class="sidebar__comments-text-box">
                                        <p> <span>John Doe</span> on template:</p>
                                        <h5>comments</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
@endsection

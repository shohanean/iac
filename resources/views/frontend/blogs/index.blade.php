@extends('layouts.front')

@section('blogs')
    current
@endsection

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend_assets') }}/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Blogs</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
<!-- News Section -->
<section class="">
    <div class="container pb-70">
        @include('frontend.parts.blogs')
    </div>
</section>
<!--End News Section -->
@endsection

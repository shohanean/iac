@extends('layouts.front')

@section('about')
    current
@endsection

@section('content')
    <section class="page-title"
        style="background-image: url({{ asset('frontend_assets') }}/images/background/page-title.jpg)">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    @include('frontend.parts.about')
    @include('frontend.parts.countries')
    @include('frontend.parts.visas')
@endsection

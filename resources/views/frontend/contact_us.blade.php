@extends('layouts.front')

@section('contact.us')
    current
@endsection

@section('content')
    <section class="page-title"
        style="background-image: url({{ asset('frontend_assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>

                    <form id="contact_form" action="{{ route('contact.us.post') }}" method="POST">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Success!</h4>
                                <hr />
                                <p class="mb-0">{{ session('success') }}</p>
                            </div>
                        @endif

                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="name" class="form-control @error('name') is-invalid @enderror"
                                        type="text" placeholder="Enter Name" value="{{ old('name') }}" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="email" class="form-control @error('email') is-invalid @enderror"
                                        type="text" placeholder="Enter Email" value="{{ old('email') }}" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="subject" class="form-control @error('subject') is-invalid @enderror"
                                        type="text" placeholder="Enter Subject" value="{{ old('subject') }}" />
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="phone" class="form-control @error('phone') is-invalid @enderror"
                                        type="text" placeholder="Enter Phone" value="{{ old('phone') }}" />
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="7"
                                placeholder="Enter Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait...">
                                <span class="btn-title">Send message</span>
                            </button>
                            <button type="reset" class="theme-btn btn-style-one bg-theme-color5">
                                <span class="btn-title">Reset</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">
                                Feel free to reach out to us through the contact details below, and our dedicated team will
                                get back to you promptly. Your global educational journey awaits, and we're here to guide
                                you every step of the way.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span>{{ setting('address') }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d767.6844116019474!2d90.37487201698498!3d23.756540347210496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b92f4ee0202d%3A0x7480d2ba4746d2c2!2s27%20SHAPTAK%20SQUARE!5e0!3m2!1sen!2sbd!4v1707113644738!5m2!1sen!2sbd"
                    data-tm-width="100%" height="500" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection

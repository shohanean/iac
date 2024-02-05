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
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
                    data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">About our company</span>
                            <h2>Immigration Services From Experienced Lawyers.</h2>
                            <h4>Canada Based Immigration Consultant Agency.</h4>
                            <div class="text">
                                Web designing in a powerful way of just not an only
                                professions, however, in a passion for our Company. We have
                                to a tendency to believe the idea that smart looking of any
                                website is the first impression on visitors.
                            </div>
                        </div>
                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-worldwide"></i>
                                    <h5 class="title">
                                        Best Immigration<br />
                                        Resources
                                    </h5>
                                </div>
                            </div>
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-passport-16"></i>
                                    <h5 class="title">Return Visas <br />Availabile</h5>
                                </div>
                            </div>
                        </div>
                        <div class="btm-box">
                            <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore
                                    now</span></a>
                        </div>
                    </div>
                </div>

                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1 overlay-anim wow fadeInUp">
                            <img src="{{ asset('frontend_assets') }}/images/resource/about-1.jpg" alt />
                        </figure>
                        <figure class="image-2 overlay-anim wow fadeInRight">
                            <img src="{{ asset('frontend_assets') }}/images/resource/about-2.jpg" alt />
                        </figure>
                        <figure class="image-3 overlay-anim wow fadeInLeft">
                            <img src="{{ asset('frontend_assets') }}/images/resource/about-3.jpg" alt />
                        </figure>
                        <figure class="stemp">
                            <img src="{{ asset('frontend_assets') }}/images/resource/stemp.png" alt />
                        </figure>
                        <div class="experience bounce-y">
                            <div class="inner">
                                <i class="icon flaticon-increase"></i>
                                <div class="text"><strong>36+</strong> Work Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="countries-section">
        <div class="auto-container">
            <div class="bg-layer"></div>
            <div class="sec-title text-center light">
                <span class="sub-title">Countries we offer</span>
                <h2>Countries We Support <br />for Immigration.</h2>
            </div>
            <div class="carousel-outer">
                <div class="countries-carousel owl-carousel owl-theme">
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset('frontend_assets') }}/images/resource/country-1.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-1.jpg" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="flag">
                                    <img src="{{ asset('frontend_assets') }}/images/resource/flag-aus.jpg" alt />
                                </div>
                                <h5 class="title">
                                    <a href="page-country-details.html">Australia</a>
                                </h5>
                                <div class="text">
                                    Fusce pretium sem ism the eget mattis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset('frontend_assets') }}/images/resource/country-2.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-2.jpg" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="flag">
                                    <img src="{{ asset('frontend_assets') }}/images/resource/flag-usa.jpg" alt />
                                </div>
                                <h5 class="title">
                                    <a href="page-country-details.html">United States</a>
                                </h5>
                                <div class="text">
                                    Fusce pretium sem ism the eget mattis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset('frontend_assets') }}/images/resource/country-3.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-3.jpg" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="flag">
                                    <img src="{{ asset('frontend_assets') }}/images/resource/flag-dub.jpg" alt />
                                </div>
                                <h5 class="title">
                                    <a href="page-country-details.html">Dubai</a>
                                </h5>
                                <div class="text">
                                    Fusce pretium sem ism the eget mattis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset('frontend_assets') }}/images/resource/country-4.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-4.jpg" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="flag">
                                    <img src="{{ asset('frontend_assets') }}/images/resource/flag-la.jpg" alt />
                                </div>
                                <h5 class="title">
                                    <a href="page-country-details.html">Los Angeles</a>
                                </h5>
                                <div class="text">
                                    Fusce pretium sem ism the eget mattis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset('frontend_assets') }}/images/resource/country-5.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-5.jpg" alt /></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="flag">
                                    <img src="{{ asset('frontend_assets') }}/images/resource/flag-in.jpg" alt />
                                </div>
                                <h5 class="title">
                                    <a href="page-country-details.html">India</a>
                                </h5>
                                <div class="text">
                                    Fusce pretium sem ism the eget mattis.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section pt-0">
        <div class="anim-icons">
            <span class="icon icon-object-2"></span>
            <span class="icon icon-object-3"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-7">
                        <span class="sub-title">What do we offer</span>
                        <h2>Outstanding Immigration <br />Visa Services.</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="text">
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem is simply free text quis bibendum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="page-service-details.html"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/service-1.jpg" alt /></a>
                            </figure>
                            <div class="icon-box">
                                <i class="icon fa fa-graduation-cap"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h5 class="title">
                                <a href="page-service-details.html">Student Visa</a>
                            </h5>
                            <div class="text">
                                Fusce pretium sem ism the eget mattis. Nam hendrerit elit
                                vel urna fermentum congue.
                            </div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="page-service-details.html"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/service-2.jpg" alt /></a>
                            </figure>
                            <div class="icon-box"><i class="icon fa fa-school"></i></div>
                        </div>
                        <div class="content-box">
                            <h5 class="title">
                                <a href="page-service-details.html">Family Visa</a>
                            </h5>
                            <div class="text">
                                Fusce pretium sem ism the eget mattis. Nam hendrerit elit
                                vel urna fermentum congue.
                            </div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="page-service-details.html"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/service-3.jpg" alt /></a>
                            </figure>
                            <div class="icon-box"><i class="icon fa fa-school"></i></div>
                        </div>
                        <div class="content-box">
                            <h5 class="title">
                                <a href="page-service-details.html">Tourist Visa</a>
                            </h5>
                            <div class="text">
                                Fusce pretium sem ism the eget mattis. Nam hendrerit elit
                                vel urna fermentum congue.
                            </div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

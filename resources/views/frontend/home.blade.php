@extends('layouts.front')

@section('home')
    current
@endsection

@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-index="rs-1" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend_assets') }}/images/main-slider/1.jpg" alt=""
                            class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-185','-190','-210','-200']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <span class="title">Solutions for all type of visas</span>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-20','-30','-70']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                <br>Services
                            </h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['170','185','190','110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <a href="page-about.html" class="theme-btn btn-style-one bg-theme-color2"><span
                                    class="btn-title">Explore now</span></a>
                        </div>
                    </li>
                    <!-- Slide 2 -->
                    <li data-index="rs-1" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend_assets') }}/images/main-slider/2.jpg" alt=""
                            class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-185','-190','-210','-200']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <span class="title">Solutions for all type of visas</span>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-20','-30','-70']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                <br>Services
                            </h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['170','185','190','110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <a href="page-about.html" class="theme-btn btn-style-one bg-theme-color2"><span
                                    class="btn-title">Explore now</span></a>
                        </div>
                    </li>
                    <!-- Slide 3 -->
                    <li data-index="rs-1" data-transition="zoomin">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend_assets') }}/images/main-slider/3.jpg" alt=""
                            class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-185','-190','-210','-200']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <span class="title">Solutions for all type of visas</span>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','650']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-20','-30','-70']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                <br>Services
                            </h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['170','185','190','110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <a href="page-about.html" class="theme-btn btn-style-one bg-theme-color2"><span
                                    class="btn-title">Explore now</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider-->

    <!-- Features Section -->
    <section class="features-section">
        <div class="anim-icons">
            <span class="icon icon-object-1"></span>
        </div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">01</span>
                                <i class="icon flaticon-passport"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Apply for New Visa Online</h5>
                                <div class="text">Lorem ipsum is simply free dolo sit amet, ctetur.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">02</span>
                                <i class="icon flaticon-visa-4"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Skilled Immigration Programs</h5>
                                <div class="text">Lorem ipsum is simply free dolo sit amet, ctetur.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box ">
                            <div class="icon-box">
                                <span class="count">03</span>
                                <i class="icon flaticon-stamp-1"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title">Required a Visa Documents</h5>
                                <div class="text">Lorem ipsum is simply free dolo sit amet, ctetur.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-text">
                    Top Rated By Customers & Immigration Firms With 100% Success Rate.
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section-->

    <!-- About Section -->
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
                            <div class="text">Web designing in a powerful way of just not an only professions,
                                however, in a passion for our Company. We have to a
                                tendency to believe the idea that smart looking of any website is the first
                                impression on visitors.</div>
                        </div>

                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-worldwide"></i>
                                    <h5 class="title">Best Immigration<br> Resources</h5>
                                </div>
                            </div>

                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-passport-16"></i>
                                    <h5 class="title">Return Visas <br>Availabile</h5>
                                </div>
                            </div>

                        </div>

                        <div class="btm-box">
                            <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore
                                    now</span></a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1 overlay-anim wow fadeInUp"><img
                                src="{{ asset('frontend_assets') }}/images/resource/about-1.jpg" alt="">
                        </figure>
                        <figure class="image-2 overlay-anim wow fadeInRight"><img
                                src="{{ asset('frontend_assets') }}/images/resource/about-2.jpg" alt="">
                        </figure>
                        <figure class="image-3 overlay-anim wow fadeInLeft"><img
                                src="{{ asset('frontend_assets') }}/images/resource/about-3.jpg" alt="">
                        </figure>
                        <figure class="stemp"><img src="{{ asset('frontend_assets') }}/images/resource/stemp.png"
                                alt="">
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
    <!--Emd About Section -->

    <!-- Countries Section -->
    <section class="countries-section">
        <div class="auto-container">
            <div class="bg-layer"></div>

            <div class="sec-title text-center light">
                <span class="sub-title">Countries we offer</span>
                <h2>Countries We Support <br>for Immigration.</h2>
            </div>

            <div class="carousel-outer">
                <!-- Countries Carousel -->
                <div class="countries-carousel owl-carousel owl-theme">
                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-1.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-1.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img src="{{ asset('frontend_assets') }}/images/resource/flag-aus.jpg"
                                        alt=""></div>
                                <h5 class="title"><a href="page-country-details.html">Australia</a></h5>
                                <div class="text">Fusce pretium sem ism the eget mattis.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-2.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-2.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/flag-usa.jpg" alt="">
                                </div>
                                <h5 class="title"><a href="page-country-details.html">United States</a></h5>
                                <div class="text">Fusce pretium sem ism the eget mattis.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-3.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-3.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/flag-dub.jpg" alt="">
                                </div>
                                <h5 class="title"><a href="page-country-details.html">Dubai</a></h5>
                                <div class="text">Fusce pretium sem ism the eget mattis.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-4.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-4.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img src="{{ asset('frontend_assets') }}/images/resource/flag-la.jpg"
                                        alt=""></div>
                                <h5 class="title"><a href="page-country-details.html">Los Angeles</a></h5>
                                <div class="text">Fusce pretium sem ism the eget mattis.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-5.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-5.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img src="{{ asset('frontend_assets') }}/images/resource/flag-in.jpg"
                                        alt=""></div>
                                <h5 class="title"><a href="page-country-details.html">India</a></h5>
                                <div class="text">Fusce pretium sem ism the eget mattis.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Countries Section -->

    <!-- Services Section -->
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
                        <h2>Outstanding Immigration <br>Visa Services.</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, lorem is simply free text quis bibendum.</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="https://via.placeholder.com/370x185" alt=""></a></figure>
                            <div class="icon-box"><i class="icon fa fa-graduation-cap"></i></div>
                        </div>
                        <div class="content-box">
                            <h5 class="title"><a href="page-service-details.html">Student Visa</a></h5>
                            <div class="text">Fusce pretium sem ism the eget mattis. Nam hendrerit elit vel urna
                                fermentum congue.</div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="https://via.placeholder.com/370x185" alt=""></a></figure>
                            <div class="icon-box"><i class="icon fa fa-school"></i></div>
                        </div>
                        <div class="content-box">
                            <h5 class="title"><a href="page-service-details.html">Family Visa</a></h5>
                            <div class="text">Fusce pretium sem ism the eget mattis. Nam hendrerit elit vel urna
                                fermentum congue.</div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-service-details.html"><img
                                        src="https://via.placeholder.com/370x185" alt=""></a></figure>
                            <div class="icon-box"><i class="icon fa fa-school"></i></div>
                        </div>
                        <div class="content-box">
                            <h5 class="title"><a href="page-service-details.html">Tourist Visa</a></h5>
                            <div class="text">Fusce pretium sem ism the eget mattis. Nam hendrerit elit vel urna
                                fermentum congue.</div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section-->

    <!-- Features Section Two -->
    <section class="features-section-two">
        <div class="auto-container">
            <div class="outer-box">
                <span class="icon-plane"></span>
                <div class="row">
                    <div class="title-column col-lg-6">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <span class="sub-title">Visa company</span>
                                <h2>Services from <br>Experienced Agents.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="features-column col-lg-6">
                        <div class="inner-column">
                            <figure class="image"><img src="{{ asset('frontend_assets') }}/images/resource/image-1.png"
                                    alt="">
                            </figure>
                            <ul class="features-list">
                                <li>Entering & Leaving From Country</li>
                                <li>Visas</li>
                                <li>Country Citizenship</li>
                                <li>Settling In Country</li>
                                <li>Help & Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section Two -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="bg-image" style="background-image: url(./images/background/1.jpg)"></div>
        <div class="anim-icons">
            <span class="icon icon-wide-map"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">Clients feedbacks</span>
                <h2>What They’re Talking About.</h2>
            </div>
            <div class="carousel-outer">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="https://via.placeholder.com/230x230" alt="">
                                </figure>
                                <span class="icon icon-quote"></span>
                            </div>
                            <div class="content-box">
                                <div class="text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to get such a personal touch. Duis aute irure
                                    lupsum istect simply free reprehenderit.</div>
                                <div class="info-box">
                                    <h5 class="name">Aleesha Brown</h5>
                                    <span class="designation">Customers</span>
                                </div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="https://via.placeholder.com/230x230" alt="">
                                </figure>
                                <span class="icon icon-quote"></span>
                            </div>
                            <div class="content-box">
                                <div class="text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to get such a personal touch. Duis aute irure
                                    lupsum istect simply free reprehenderit.</div>
                                <div class="info-box">
                                    <h5 class="name">Mike Hardson</h5>
                                    <span class="designation">Customers</span>
                                </div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="https://via.placeholder.com/230x230" alt="">
                                </figure>
                                <span class="icon icon-quote"></span>
                            </div>
                            <div class="content-box">
                                <div class="text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to get such a personal touch. Duis aute irure
                                    lupsum istect simply free reprehenderit.</div>
                                <div class="info-box">
                                    <h5 class="name">Christine Eve</h5>
                                    <span class="designation">Customers</span>
                                </div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Visa company</span>
                            <h2>Leading Immigration Consulting Firm</h2>
                            <div class="text">There cursus massa at urnaaculis estie. Sed aliquamellus vitae
                                ultrs condmentum leo massa mollis estiegittis miristum nulla sed medy fringilla
                                simply free text vitae.</div>
                        </div>

                        <!--Skills-->
                        <div class="skills">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Visa Process</h6>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="77">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="3000"
                                                        data-stop="86">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-style-two">
                            <li><i class="fa fa-check-circle"></i> Making this the first true generator on the
                                Internet</li>
                            <li><i class="fa fa-check-circle"></i> Lorem Ipsum is not simply random text</li>
                            <li><i class="fa fa-check-circle"></i> If you are going to use a passage</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="image-box">
                            <figure class="image overlay-anim wow fadeInUp"><img
                                    src="{{ asset('frontend_assets') }}/images/resource/image-2.jpg" alt="">
                            </figure>
                            <span class="float-text">Trusted by Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Emd About Section Two -->

    <!-- Clients Section   -->
    <section class="clients-section">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <img src="{{ asset('frontend_assets') }}/images/resource/client.png"
                            alt=""> </li>
                    <li class="slide-item"> <img src="{{ asset('frontend_assets') }}/images/resource/client.png"
                            alt=""> </li>
                    <li class="slide-item"> <img src="{{ asset('frontend_assets') }}/images/resource/client.png"
                            alt=""> </li>
                    <li class="slide-item"> <img src="{{ asset('frontend_assets') }}/images/resource/client.png"
                            alt=""> </li>
                    <li class="slide-item"> <img src="{{ asset('frontend_assets') }}/images/resource/client.png"
                            alt=""> </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <i class="icon flaticon-passport-16"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="30">0</span>+
                            </div>
                            <h6 class="counter-title">Visa Categories</h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <i class="icon flaticon-group"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="389">0</span>+
                            </div>
                            <h6 class="counter-title">Team Members</h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <i class="icon flaticon-life-insurance"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4.9">0</span>k
                            </div>
                            <h6 class="counter-title">Visa Process</h6>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <i class="icon flaticon-cooperation"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="98">0</span>%
                            </div>
                            <h6 class="counter-title">Success Rates</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact Section -->

    <!-- Gallery Section -->
    <section class="gallery-section pt-0">
        <div class="auto-container">
            <div class="carousel-outer">
                <!--clients carousel-->
                <ul class="gallery-carousel owl-carousel owl-theme wow fadeInUp">
                    <li class="gallery-item"> <a href="https://via.placeholder.com/370x345" class="lightbox-image"><img
                                src="https://via.placeholder.com/370x345" alt=""></a> </li>
                    <li class="gallery-item"> <a href="https://via.placeholder.com/370x345" class="lightbox-image"><img
                                src="https://via.placeholder.com/370x345" alt=""></a> </li>
                    <li class="gallery-item"> <a href="https://via.placeholder.com/370x345" class="lightbox-image"><img
                                src="https://via.placeholder.com/370x345" alt=""></a> </li>
                    <li class="gallery-item"> <a href="https://via.placeholder.com/370x345" class="lightbox-image"><img
                                src="https://via.placeholder.com/370x345" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title">
                            <i class="sub-title">Our benefits</i>
                            <h2>Few Reasons to Choose Our Company.</h2>
                            <div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem is simply free text quis bibendum.</div>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-job-interview"></i>
                            <span class="sub-title">Benefit 01</span>
                            <h4 class="title">Direct Online Interviews</h4>
                            <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-approved-1"></i>
                            <span class="sub-title">Benefit 02</span>
                            <h4 class="title">Quick & Easy Process</h4>
                            <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>

                        <div class="info-box">
                            <i class="icon flaticon-passport-16"></i>
                            <span class="sub-title">Benefit 03</span>
                            <h4 class="title">99% Visa Approvals</h4>
                            <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="image-column col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="image-box">
                            <figure class="plane"><img
                                    src="{{ asset('frontend_assets') }}/images/resource/icon-plane.png" alt="">
                            </figure>
                            <figure class="image"><img src="{{ asset('frontend_assets') }}/images/resource/image-3.png"
                                    alt="">
                            </figure>
                            <figure class="stemp"><img src="{{ asset('frontend_assets') }}/images/resource/stemp-2.png"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Training Section -->
    <section class="training-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Training & Certification</span>
                <h2>Get the Immigration <br> Trainings you Deserve.</h2>
            </div>

            <div class="carousel-outer">
                <div class="training-carousel owl-carousel owl-theme">
                    <!-- Training Block -->
                    <div class="training-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img
                                            src="https://via.placeholder.com/270x358" alt=""></a></figure>
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">Citizenship Test</a>
                                    </h5>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">Citizenship Test</a>
                                    </h5>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Block -->
                    <div class="training-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img
                                            src="https://via.placeholder.com/270x358" alt=""></a></figure>
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">Take IELTS</a></h5>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">Take IELTS</a></h5>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Block -->
                    <div class="training-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img
                                            src="https://via.placeholder.com/270x358" alt=""></a></figure>
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">PTE Coaching</a></h5>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">PTE Coaching</a></h5>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Block -->
                    <div class="training-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-course-details.html"><img
                                            src="https://via.placeholder.com/270x358" alt=""></a></figure>
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">TOEFL Coaching</a></h5>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h5 class="title"><a href="page-course-details.html">TOEFL Coaching</a></h5>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                    <a href="page-course-details.html" class="read-more"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-text">Top Rated By Customers & Immigration Firms With 100% Success Rate.</div>
        </div>
    </section>
    <!-- End Training Section -->

    <!-- FAQ Section -->
    <section class="faqs-section">
        <div class="anim-icons">
            <span class="icon icon-object-2"></span>
            <span class="icon icon-object-3"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Our faqs</span>
                            <h2>Frequently Asked Questions.</h2>
                            <div class="text">Find answers to the most common questions below. If you still can’t
                                find the answer you’re looking for, just <a href="/contact-us">Contact Us</a>!
                            </div>
                        </div>

                        <ul class="accordion-box wow fadeInRight">
                            @forelse ($faqs as $faq)
                                <!--Block-->
                                <li class="accordion block @if ($loop->index == 1) active-block @endif">
                                    <div class="acc-btn @if ($loop->index == 1) active @endif">
                                        {{ $faq->question }}
                                        <div class="icon fa fa-angle-right"></div>
                                    </div>
                                    <div class="acc-content @if ($loop->index == 1) current @endif">
                                        <div class="content">
                                            <div class="text">{!! $faq->answer !!}</div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="text-danger">
                                    Nothing to show, no FAQ found
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="banner-box-one">
                            <i class="icon flaticon-visa-4"></i>
                            <h3 class="title">Have 10+ Years Of Visa Experience To Give You Right Guidance.
                            </h3>
                        </div>
                        <div class="banner-box-two">
                            <figure class="image"><img src="{{ asset('frontend_assets') }}/images/resource/image-4.jpg"
                                    alt="">
                            </figure>
                            <h5 class="caption">Consultant Agency.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ Section -->

    <!--Call To Action -->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="inner-container">
                <h5 class="title">Are you Looking for Visa Applications Just Call us!</h5>
                <a href="tel:+928800683000" class="info-btn"><i class="fa fa-phone"></i> +92 (8800) 6830 00</a>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">recent news feed</span>
                <h2>Latest News & Articles <br>From the Blog.</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.html"><img
                                        src="https://via.placeholder.com/370x320" alt=""></a></figure>
                            <span class="date"><b>26</b> Nov</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <h4 class="title"><a href="news-details.html">The Human Rights and Democracy Study
                                    Visa Programms</a></h4>
                            <a href="news-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.html"><img
                                        src="https://via.placeholder.com/370x320" alt=""></a></figure>
                            <span class="date"><b>26</b> Nov</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <h4 class="title"><a href="news-details.html">The Human Rights and Democracy Study
                                    Visa Programms</a></h4>
                            <a href="news-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.html"><img
                                        src="https://via.placeholder.com/370x320" alt=""></a></figure>
                            <span class="date"><b>26</b> Nov</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <h4 class="title"><a href="news-details.html">The Human Rights and Democracy Study
                                    Visa Programms</a></h4>
                            <a href="news-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->
@endsection

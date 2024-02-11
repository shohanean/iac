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
                    @foreach ($banners as $banner)
                        <!-- Slide Image -->
                        <li data-index="rs-1" data-transition="zoomout">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('uploads') }}/{{ $banner->image }}" alt="" class="rev-slidebg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-185','-190','-210','-200']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <span class="title">{{ $banner->top_line }}</span>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-20','-20','-30','-70']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h1>{{ $banner->tag_line }}</h1>
                            </div>
                            @if ($banner->btn_status)
                                <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                    data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                    data-responsive_offset="on" data-type="text" data-height="none"
                                    data-width="['700','750','700','450']" data-whitespace="normal"
                                    data-hoffset="['0','0','0','0']" data-voffset="['170','185','190','110']"
                                    data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                    data-textalign="['top','top','top','top']"
                                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                    <a href="{{ $banner->btn_link }}" class="theme-btn btn-style-one bg-theme-color2"><span
                                            class="btn-title">{{ $banner->btn_text }}</span></a>
                                </div>
                            @endif
                        </li>
                    @endforeach
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

    @include('frontend.parts.about')
    @include('frontend.parts.countries')
    @include('frontend.parts.services')

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

    @include('frontend.parts.testimonials')

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
    <!--End About Section Two -->

    <!-- Clients Section   -->
    {{-- <section class="clients-section">
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
    </section> --}}
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

    @include('frontend.parts.faqs')

    <!--Call To Action -->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="inner-container">
                <h5 class="title">Are you Looking for Visa Applications Just Call us!</h5>
                <a href="tel:{{ setting('phone') }}" class="info-btn"><i
                        class="fa fa-phone"></i>{{ setting('phone') }}</a>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Blog Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our Recent Blog</span>
                <h2>Latest News & Articles <br>From the Blog.</h2>
            </div>
            @include('frontend.parts.blogs')
        </div>
    </section>
    <!--End Blog Section -->
@endsection

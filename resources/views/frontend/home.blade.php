<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IAC | Study Abroad Consultancy Firm</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('frontend_assets') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('frontend_assets') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->

    <link href="{{ asset('frontend_assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend_assets') }}/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('iac_favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('iac_favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <!-- Header Top -->
            <div class="header-top">
                <div class="inner-container">

                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="list-style-one">
                            <li><i class="fa fa-envelope"></i> <a
                                    href="mailto:iacstudyabroad@gmail.com">iacstudyabroad@gmail.com</a></li>
                            <li><i class="fa fa-map-marker"></i> 27 Shaptak Square Lift - 7, Dhanmondi, Dhaka,
                                Bangladesh</li>
                        </ul>
                    </div>

                    <div class="top-right">
                        <ul class="useful-links">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>

                <div class="outer-box">
                    <ul class="social-icon-one">
                        <li><a target="_blank" href="https://www.facebook.com/iac.bangladesh"><span
                                    class="fab fa-facebook-square"></span></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/internationalapplicationcentre"><span
                                    class="fab fa-instagram"></span></a></li>
                        <li><a target="_blank"
                                href="https://www.linkedin.com/company/international-application-centre"><span
                                    class="fab fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img width="120" src="{{ asset('iac_logo.png') }}" alt="not found">
                            </a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="current dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home page 01</a></li>
                                        <li><a href="index-2.html">Home page 02</a></li>
                                        <li><a href="index-3.html">Home page 03</a></li>
                                        <li class="dropdown"><a href="#">Single</a>
                                            <ul>
                                                <li><a href="index-1-single.html">Home Single 1</a></li>
                                                <li><a href="index-2-single.html">Home Single 2</a></li>
                                                <li><a href="index-3-single.html">Home Single 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Boxed</a>
                                            <ul>
                                                <li><a href="index-1-boxed.html">Home Boxed 1</a></li>
                                                <li><a href="index-2-boxed.html">Home Boxed 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">RTL</a>
                                            <ul>
                                                <li><a href="index-1-rtl.html">Home RTL 1</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="page-about.html">About</a></li>
                                        <li class="dropdown"><a href="#">Country</a>
                                            <ul>
                                                <li><a href="page-country.html">Country grid</a></li>
                                                <li><a href="page-country-details.html">Country Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Team</a>
                                            <ul>
                                                <li><a href="page-team.html">Team List</a></li>
                                                <li><a href="page-team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="page-testimonial.html">Testimonial</a></li>
                                        <li><a href="page-FAQ.html">FAQ</a></li>
                                        <li><a href="page-404.html">Page 404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Coaching</a>
                                    <ul>
                                        <li><a href="page-course.html">Coaching grid</a></li>
                                        <li><a href="page-course-details.html">Coaching Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Visa</a>
                                    <ul>
                                        <li><a href="page-service.html">Visa grid</a></li>
                                        <li><a href="page-service-details.html">Visa Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop-products.html">Products</a></li>
                                        <li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
                                        <li><a href="shop-product-details.html">Product Details</a></li>
                                        <li><a href="shop-cart.html">Cart</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="news-grid.html">News Grid</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <a href="tel:+92(8800)9806" class="info-btn">
                                <i class="icon fa fa-phone"></i>
                                <small>Call Anytime</small><br> + 88 ( 9800 ) 6802
                            </a>

                            <div class="ui-btn-outer">
                                <button class="ui-btn ui-btn search-btn">
                                    <span class="icon lnr lnr-icon-search"></span>
                                </button>
                            </div>

                            <a href="#" class="theme-btn btn-style-one bg-theme-color3"><span
                                    class="btn-title">Book a consultation</span></a>

                            <!-- Mobile Nav toggler -->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="nav-logo"><a href="index.html"><img
                                    src="{{ asset('frontend_assets') }}/images/logo-2.png" alt=""
                                    title=""></a></div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <ul class="contact-list-one">
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <span class="title">Call Now</span>
                                <a href="tel:+92880098670">+92 (8800) - 98670</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-envelope1"></span>
                                <span class="title">Send Email</span>
                                <a href="mailto:help@company.com">help@company.com</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-clock"></span>
                                <span class="title">Send Email</span>
                                Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                            </div>
                        </li>
                    </ul>


                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

            <!-- Header Search -->
            <div class="search-popup">
                <span class="search-back-drop"></span>
                <button class="close-search"><span class="fa fa-times"></span></button>

                <div class="search-inner">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..."
                                required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Header Search -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo">
                            <a href="index.html" title=""><img src="{{ asset('iac_logo.png') }}"
                                    alt="" title=""></a>
                        </div>

                        <!--Right Col-->
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-collapse show collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <!--Keep This Empty / Menu will come through Javascript-->
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->

        <!--Main Slider-->
        <section class="main-slider">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper"
                data-source="gallery">
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
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <span class="title">Solutions for all type of visas</span>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['750','750','750','650']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-20','-20','-30','-70']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                    <br>Services
                                </h1>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['170','185','190','110']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
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
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <span class="title">Solutions for all type of visas</span>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['750','750','750','650']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-20','-20','-30','-70']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                    <br>Services
                                </h1>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['170','185','190','110']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
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
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <span class="title">Solutions for all type of visas</span>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['750','750','750','650']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-20','-20','-30','-70']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h1>Best Visa <span class="style-font color2">&amp;</span> <br>Immigrations
                                    <br>Services
                                </h1>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['170','185','190','110']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
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
                                <a href="page-about.html" class="theme-btn btn-style-one"><span
                                        class="btn-title">Explore now</span></a>
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
                            <figure class="stemp"><img
                                    src="{{ asset('frontend_assets') }}/images/resource/stemp.png" alt="">
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
                                    <div class="flag"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/flag-aus.jpg"
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
                                            src="{{ asset('frontend_assets') }}/images/resource/flag-usa.jpg"
                                            alt=""></div>
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
                                            src="{{ asset('frontend_assets') }}/images/resource/flag-dub.jpg"
                                            alt=""></div>
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
                                    <div class="flag"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/flag-la.jpg"
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
                                    <div class="flag"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/flag-in.jpg"
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
                                <figure class="image"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/image-1.png"
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
                                    <figure class="image"><img src="https://via.placeholder.com/230x230"
                                            alt=""></figure>
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
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="https://via.placeholder.com/230x230"
                                            alt=""></figure>
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
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="https://via.placeholder.com/230x230"
                                            alt=""></figure>
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
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></div>
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
                                        src="{{ asset('frontend_assets') }}/images/resource/image-2.jpg"
                                        alt=""></figure>
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
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="30">0</span>+</div>
                                <h6 class="counter-title">Visa Categories</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner">
                                <i class="icon flaticon-group"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="389">0</span>+</div>
                                <h6 class="counter-title">Team Members</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                            <div class="inner">
                                <i class="icon flaticon-life-insurance"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="4.9">0</span>k</div>
                                <h6 class="counter-title">Visa Process</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                            <div class="inner">
                                <i class="icon flaticon-cooperation"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="98">0</span>%</div>
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
                        <li class="gallery-item"> <a href="https://via.placeholder.com/370x345"
                                class="lightbox-image"><img src="https://via.placeholder.com/370x345"
                                    alt=""></a> </li>
                        <li class="gallery-item"> <a href="https://via.placeholder.com/370x345"
                                class="lightbox-image"><img src="https://via.placeholder.com/370x345"
                                    alt=""></a> </li>
                        <li class="gallery-item"> <a href="https://via.placeholder.com/370x345"
                                class="lightbox-image"><img src="https://via.placeholder.com/370x345"
                                    alt=""></a> </li>
                        <li class="gallery-item"> <a href="https://via.placeholder.com/370x345"
                                class="lightbox-image"><img src="https://via.placeholder.com/370x345"
                                    alt=""></a> </li>
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
                                <a href="page-about.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>

                            <div class="info-box">
                                <i class="icon flaticon-approved-1"></i>
                                <span class="sub-title">Benefit 02</span>
                                <h4 class="title">Quick & Easy Process</h4>
                                <a href="page-about.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>

                            <div class="info-box">
                                <i class="icon flaticon-passport-16"></i>
                                <span class="sub-title">Benefit 03</span>
                                <h4 class="title">99% Visa Approvals</h4>
                                <a href="page-about.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="image-box">
                                <figure class="plane"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/icon-plane.png"
                                        alt="">
                                </figure>
                                <figure class="image"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/image-3.png"
                                        alt="">
                                </figure>
                                <figure class="stemp"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/stemp-2.png"
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
                                @foreach ($faqs as $faq)
                                    <!--Block-->
                                    <li class="accordion block @if ($loop->first) active-block @endif">
                                        <div class="acc-btn @if ($loop->first) active @endif">
                                            {{ $faq->question }}
                                            <div class="icon fa fa-angle-right"></div>
                                        </div>
                                        <div class="acc-content @if ($loop->first) current @endif">
                                            <div class="content">
                                                <div class="text">{!! $faq->answer !!}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
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
                                <figure class="image"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/image-4.jpg"
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

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="logo">
                        <a href="index.html">
                            <img width="120" src="{{ asset('iac_logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="subscribe-form">
                        <h5 class="title">Subscribe to Newsletter</h5>
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="email" name="email" class="email" value=""
                                    placeholder="Email Address" required="">
                                <button type="button" class="theme-btn btn-style-one"><span
                                        class="btn-title">Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-3 col-lg-4">
                            <div class="footer-widget about-widget">
                                <h5 class="widget-title">Contact</h5>
                                <div class="text">66 Road Broklyn Street, 600 <br>New York, USA</div>
                                <ul class="contact-info">
                                    <li><i class="fa fa-envelope"></i> <a
                                            href="mailto:needhelp@potisen.com">needhelp@company.com</a><br></li>
                                    <li><i class="fa fa-phone-square"></i> <a href="tel:+926668880000">+92 666 888
                                            0000</a><br></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
                            <div class="footer-widget links-widget">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h5 class="widget-title">Explore</h5>
                                        <ul class="user-links">
                                            <li><a href="#">About Company</a></li>
                                            <li><a href="#">Meet the Team</a></li>
                                            <li><a href="#">News & Media</a></li>
                                            <li><a href="#">Our Projects</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h5 class="widget-title">Visa</h5>
                                        <ul class="user-links">
                                            <li><a href="#">Students Visa</a></li>
                                            <li><a href="#">Business Visa</a></li>
                                            <li><a href="#">Family Visa</a></li>
                                            <li><a href="#">Travel Visa</a></li>
                                            <li><a href="#">Work Visa</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h5 class="widget-title">Services</h5>
                                        <ul class="user-links">
                                            <li><a href="#">PR Applicants</a></li>
                                            <li><a href="#">Visa Consultancy</a></li>
                                            <li><a href="#">Travel Insurance</a></li>
                                            <li><a href="#">Work Permits</a></li>
                                            <li><a href="#">Abroad Study</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget gallery-widget">
                                <h5 class="widget-title">Gallery</h5>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="#"><img src="https://via.placeholder.com/80x80"
                                                    alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">&copy; Copyright 2023 by <a href="index.html">Company.com</a>
                        </div>

                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>

    <script src="{{ asset('frontend_assets') }}/js/jquery.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script
        src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/js/main-slider-script.js"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/wow.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/appear.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/select2.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/owl.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/script.js"></script>
</body>

</html>

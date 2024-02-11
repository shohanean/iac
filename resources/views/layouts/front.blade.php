<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ setting('name') }} | {{ setting('heading') }}</title>
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
                                    href="mailto:{{ setting('email') }}">{{ setting('email') }}</a></li>
                            <li><i class="fa fa-map-marker"></i>{{ setting('address') }}</li>
                        </ul>
                    </div>

                    <div class="top-right">
                        <ul class="useful-links">
                            @auth
                                <li><a href="{{ route('dashboard') }}"><i class="fa fa-user-circle"></i> Dashboard</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>

                <div class="outer-box">
                    <ul class="social-icon-one">
                        @if (setting('facebook_link'))
                            <li><a target="_blank" href="{{ setting('facebook_link') }}"><span
                                        class="fab fa-facebook-square"></span></a></li>
                        @endif
                        @if (setting('instagram_link'))
                            <li><a target="_blank" href="{{ setting('instagram_link') }}"><span
                                        class="fab fa-instagram"></span></a></li>
                        @endif
                        @if (setting('linkedin_link'))
                            <li><a target="_blank" href="{{ setting('linkedin_link') }}"><span
                                        class="fab fa-linkedin"></span></a></li>
                        @endif
                        @if (setting('pinterest_link'))
                            <li><a target="_blank" href="{{ setting('pinterest_link') }}"><span
                                        class="fab fa-pinterest"></span></a></li>
                        @endif
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
                                <li class="@yield('home')"><a href="{{ route('home') }}">Home</a></li>
                                <li class="@yield('about')"><a href="{{ route('about') }}">About</a></li>
                                <li class="@yield('blogs')"><a href="{{ route('blogs') }}">Blogs</a></li>
                                <li class="@yield('contact.us')"><a href="{{ route('contact.us') }}">Contact Us</a></li>
                                <li class="dropdown"><a href="#">Reserved</a>
                                    <ul>
                                        <li><a href="news-grid.html">News Grid</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <a href="tel:{{ setting('phone') }}" class="info-btn">
                                <i class="icon fa fa-phone"></i>
                                <small>Call Anytime</small><br> {{ setting('phone') }}
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
                        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('iac_logo.png') }}"
                                    alt="not found" title=""></a></div>
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
                                <a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-envelope1"></span>
                                <span class="title">Send Email</span>
                                <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon fa fa-address-card"></i>
                                <span class="title">Our Address</span>
                                {{ setting('address') }}
                            </div>
                        </li>
                    </ul>


                    <ul class="social-links">
                        @if (setting('facebook_link'))
                            <li><a href="{{ setting('facebook_link') }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                        @endif
                        @if (setting('instagram_link'))
                            <li><a href="{{ setting('instagram_link') }}" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        @endif
                        @if (setting('linkedin_link'))
                            <li><a href="{{ setting('linkedin_link') }}" target="_blank"><i
                                        class="fab fa-linkedin"></i></a></li>
                        @endif
                        @if (setting('pinterest_link'))
                            <li><a href="{{ setting('pinterest_link') }}" target="_blank"><i
                                        class="fab fa-pinterest"></i></a></li>
                        @endif
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
        @yield('content')
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
                                <div class="text">
                                    {{ setting('address') }}
                                </div>
                                <ul class="contact-info">
                                    <li><i class="fa fa-envelope"></i> <a
                                            href="mailto:{{ setting('email') }}">{{ setting('email') }}</a><br></li>
                                    <li><i class="fa fa-phone-square"></i> <a
                                            href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a><br></li>
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
                        <div class="copyright-text">&copy; Copyright {{ \Carbon\Carbon::now()->format('Y') }} by <a
                                href="{{ route('home') }}">{{ setting('name') }}</a>, Developed with love by <a
                                href="https://www.linkedin.com/in/shohanhossainean/" target="_blank">Shohan Hossain
                                Ean</a>
                        </div>

                        <ul class="social-icon-two">
                            @if (setting('facebook_link'))
                                <li><a href="{{ setting('facebook_link') }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if (setting('instagram_link'))
                                <li><a href="{{ setting('instagram_link') }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            @endif
                            @if (setting('linkedin_link'))
                                <li><a href="{{ setting('linkedin_link') }}" target="_blank"><i
                                            class="fab fa-linkedin"></i></a></li>
                            @endif
                            @if (setting('pinterest_link'))
                                <li><a href="{{ setting('pinterest_link') }}" target="_blank"><i
                                            class="fab fa-pinterest"></i></a></li>
                            @endif
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

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
                            <a href="tel:+8801829311243" class="info-btn">
                                <i class="icon fa fa-phone"></i>
                                <small>Call Anytime</small><br> +8801829311243
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

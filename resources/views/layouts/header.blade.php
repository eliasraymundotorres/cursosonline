<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>::Cursos Online::</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/home" aria-label="Toggle navigation">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" aria-label="Toggle navigation">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Lista de cursos</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="javascript:void(0)">Programaci??n</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Dise??o</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">JavaScript</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Paginas</a>
                                        <ul class="sub-menu mega-menu collapse" id="submenu-1-4">
                                            <li class="single-block">
                                                <ul>
                                                    <li class="mega-menu-title">Essential Pages</li>
                                                    <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Ads Details</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Ads Post</a></li>
                                                    <li class="nav-item"><a href="pricing.html">Pricing Table</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Sign Up</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Sign In</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Contact Us</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">FAQ</a></li>
                                                    <li class="nav-item"><a href="404.html">Error Page</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Mail Success</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Comming Soon</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <ul>
                                                    <li class="mega-menu-title">Dashboard</li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Account Overview</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">My Profile</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">My Ads</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Favorite Ads</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Ad post</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Bookmarked Ad</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Messages</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Close account</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0)">Invoice</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-5"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-5">
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Principal</a>
                                            </li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Secundario</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog complementario</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="login-button">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-enter"></i> Sesi??n</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-user"></i> Registrarse</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="button header-button">
                                <a href="javascript:void(0)" class="btn">Unirse</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

   @yield('section')

    <!-- Start Newsletter Area -->
    <div class="newsletter section">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="title">
                            <i class="lni lni-alarm"></i>
                            <h2>Newsletter</h2>
                            <p>We don't send spam so don't worry.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form">
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Your email address" type="email">
                                <div class="button">
                                    <button class="btn">Subscribe<span class="dir-part"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer mobile-app">
                            <h3>Mobile Apps</h3>
                            <div class="app-button">
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-play-store"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        Google Play
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-apple"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        App Store
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Locations</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Chicago</a></li>
                                        <li><a href="javascript:void(0)">New York City</a></li>
                                        <li><a href="javascript:void(0)">San Francisco</a></li>
                                        <li><a href="javascript:void(0)">Washington</a></li>
                                        <li><a href="javascript:void(0)">Boston</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Los Angeles</a></li>
                                        <li><a href="javascript:void(0)">Seattle</a></li>
                                        <li><a href="javascript:void(0)">Las Vegas</a></li>
                                        <li><a href="javascript:void(0)">San Diego</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">How It's Works</a></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                                <li><a href="javascript:void(0)">Signup</a></li>
                                <li><a href="javascript:void(0)">Help & Support</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-contact">
                            <h3>Contact</h3>
                            <ul>
                                <li>23 New Design Str, Lorem Upsum 10<br> Hudson Yards, USA</li>
                                <li>Tel. +(123) 1800-567-8990 <br> Mail. support@classigrids.com</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <ul class="footer-bottom-links">
                                    <li><a href="javascript:void(0)">Terms of use</a></li>
                                    <li><a href="javascript:void(0)"> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Advanced Search</a></li>
                                    <li><a href="javascript:void(0)">Site Map</a></li>
                                    <li><a href="javascript:void(0)">Information</a></li>
                                </ul>
                                <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/"
                                        rel="nofollow" target="_blank">GrayGrids</a>
                                </p>
                                <ul class="footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>
    

    @yield('script')

</body>

</html>
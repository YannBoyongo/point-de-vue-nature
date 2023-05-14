<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('front/images/favicon.png') }}">
    <title>ECO HTML</title>
    <!-- CSS FILES START -->
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/all.min.css') }}" rel="stylesheet">
    <!-- CSS FILES End -->
</head>

<body>
    <div class="wrapper {{ Route::currentRouteName() == 'welcome' ? 'home1' : '' }}">
        @if (Route::currentRouteName() == 'welcome')
            <!--Header Start-->
            <header class="header-style-1">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('front/images/logo.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.html" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Home </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="home-two.html">Home Two</a></li>
                                    <li><a href="home-three.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="events-grid.html" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events </a>
                                <ul class="dropdown-menu">
                                    <li><a href="events-grid.html">Events Grid</a></li>
                                    <li><a href="events-grid-2.html">Events Grid Two</a></li>
                                    <li><a href="events-grid-3.html">Events Grid Three</a></li>
                                    <li><a href="events-list.html">Events List</a></li>
                                    <li><a href="events-list-two.html">Events List Two</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="causes.html" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Causes </a>
                                <ul class="dropdown-menu">
                                    <li><a href="causes.html">Causes Grid</a></li>
                                    <li><a href="causes-list.html">Causes List</a></li>
                                    <li><a href="causes-details.html">Causes Details</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blogs </a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog Default</a></li>
                                    <li><a href="blog-list.html">Blog List</a> </li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-two-col.html">Blog Two Columns</a> </li>
                                    <li><a href="blog-three-col.html">Blog Three Columns</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"> Pages </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Projects</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="projects.html">Projects</a> </li>
                                            <li><a href="projects-grid.html">Projects Grid</a> </li>
                                            <li><a href="projects-grid-two.html">Projects Grid Two</a> </li>
                                            <li><a href="projects-list.html">Projects List</a> </li>
                                            <li><a href="projects-details.html">Project Details</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop.html">Shop</a> </li>
                                            <li><a href="shop-two.html">Shop Two</a> </li>
                                            <li><a href="shop-details.html">Shop Details</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="team.html">Team One</a> </li>
                                            <li><a href="team-two.html">Team Two</a> </li>
                                            <li><a href="team-details.html">Team Details</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery-grid.html">Gallery Grid</a> </li>
                                            <li><a href="gallery-full.html">Gallery Full</a> </li>
                                            <li><a href="gallery-masonry.html">Gallery Masonry</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="testimonials.html">Testimonials</a> </li>
                                    <li><a href="donation.html">Donation</a> </li>
                                    <li><a href="my-account.html">My Account</a> </li>
                                    <li><a href="coming-soon.html">Coming Soon</a> </li>
                                    <li><a href="page-404.html">404 Error</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="contact.html" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contact </a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact-one.html">Contact One</a> </li>
                                    <li><a href="contact-two.html">Contact Two</a> </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="float-right topside-menu">
                            <li> <a class="con" href="#">Contribute</a> </li>
                            <li><a href="#search"> <i class="fas fa-search"></i> </a></li>
                            <li class="burger"> <a href="#"><i class="fas fa-bars"></i> Menu</a> </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--Header End-->
            <div id="search">
                <button type="button" class="close">×</button>
                <form class="search-overlay-form">
                    <input type="search" value="" placeholder="type keyword(s) here" />
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <!--Slider Start-->
        @endif
        @yield('content')
        <!--Footer Start-->
        <footer class="footer">
            <div class="footer-top wf100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4>About Ecova</h4>
                                <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of
                                    green businesses helping people save energy, water, and other resources. Definitely,
                                    you can go with this business as it is a nothing but the future. </p>
                                <a href="#" class="lm">About us</a>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4>Our Promises</h4>
                                <ul class="quick-links">
                                    <li><a href="#">Solar Energy</a></li>
                                    <li><a href="#">Waste Management</a></li>
                                    <li><a href="#">Eco Ideas</a></li>
                                    <li><a href="#">Recycling Materials</a></li>
                                    <li><a href="#">Plant Ecology</a></li>
                                    <li><a href="#">Saving Wildlife </a></li>
                                </ul>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4>Latest Posts</h4>
                                <ul class="lastest-products">
                                    <li> <img src="{{ asset('front/images/flp1.jpg') }}" alt=""> <strong><a
                                                href="#">How you
                                                can keep alive wild animals for...</a></strong> <span
                                            class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                                    <li> <img src="{{ asset('front/images/flp2.jpg') }}" alt=""> <strong><a
                                                href="#">Eliminate your plastic bottle
                                                pollution &
                                                keep...</a></strong> <span class="pdate"><i>Posted:</i> 29 September,
                                            2018</span> </li>
                                    <li> <img src="{{ asset('front/images/flp3.jpg') }}" alt=""> <strong><a
                                                href="#">How you
                                                can keep alive wild animals for...</a></strong> <span
                                            class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                                </ul>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <div id="fpro-slider" class="owl-carousel owl-theme">
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <img src="{{ asset('front/images/fpro1.jpg') }}" alt="">
                                            <div class="fp-text">
                                                <h6><a href="#">Buy T-Shirts</a></h6>
                                                <strong>$19.00</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <img src="{{ asset('front/images/fpro1.jpg') }}" alt="">
                                            <div class="fp-text">
                                                <h6><a href="#">Buy T-Shirts</a></h6>
                                                <strong>$19.00</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <img src="{{ asset('front/images/fpro1.jpg') }}" alt="">
                                            <div class="fp-text">
                                                <h6><a href="#">Buy T-Shirts</a></h6>
                                                <strong>$19.00</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                </div>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyr wf100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4"> <img src="{{ asset('front/images/logo.png') }}"
                                alt=""> </div>
                        <div class="col-md-8 col-sm-8">
                            <p> All Rights Reserved of Ecova © 2018, Design & Developed By: GramoTech </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->
        <nav class="sidenav">
            <ul class="main">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="events-grid.html">Events</a></li>
                <li><a href="causes.html">Causes</a></li>
                <li><a href="projects-grid.html">Projects</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="shop-two.html">Shop</a></li>
                <li><a href="contact-one.html">Contact</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>
    </div>
    <!--   JS Files Start  -->
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('front/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
</body>

</html>

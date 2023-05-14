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
    <link href="{{ asset('front/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/all.min.css') }}" rel="stylesheet">
    <!-- CSS FILES End -->
</head>

<body>
    <div class="wrapper {{ Route::currentRouteName() == 'welcome' ? 'home1' : '' }}">
        <!--Header Start-->
        <header class="{{ Route::currentRouteName() == 'welcome' ? 'header-style-1' : 'header-style-2' }}">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    @if ($setting->logo)
                        <img src="{{ asset('storage/settings/' . $setting->logo . '') }}" alt="{{ $setting->name }}"
                            style="width:auto; height:62px">
                    @else
                        <h1>LOGO</h1>
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}"> Accueil </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('about.us') }}">Nous Découvrir</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> Science & Société </a>
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
                                aria-haspopup="true" aria-expanded="false"> Média </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Faits et Chiffres</a></li>
                                <li><a href="#">Communiqué de presse</a> </li>
                                <li><a href="#">Foire à question</a> </li>
                                <li><a href="#">Témoignage</a> </li>
                                <li><a href="#">Gallerie</a> </li>
                                <li><a href="{{ route('contact.us') }}">Contact</a> </li>
                            </ul>
                        </li>
                    </ul>
                    @if (Route::currentRouteName() == 'welcome')
                        <ul class="float-right topside-menu">
                            <li> <a class="con" href="{{ route('contact.us') }}">Contactez-nous</a> </li>
                            <li><a href="#search"> <i class="fas fa-search"></i> </a></li>
                        </ul>
                    @endif
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
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>





</body>

</html>

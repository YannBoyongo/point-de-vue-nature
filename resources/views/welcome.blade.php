@extends('layouts.main')

@section('content')
    <section id="home-slider" class="owl-carousel owl-theme wf100">
        <div class="item">
            <div class="slider-caption">
                <div class="container">
                    <strong>100k Plants Grown in 2018,</strong>
                    <h1>Heal the World</h1>
                    <p> Environmental awareness is not a trend that comes into style a few months and stops.
                        Individuals working towards making a small impact on Earth.</p>
                    <a href="#" class="active">Join us Now</a> <a href="#">More About Us</a>
                </div>
            </div>
            <img src="{{ asset('front/images/h1-slide1.jpg') }}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption">
                <div class="container">
                    <strong>Organize the Management System of</strong>
                    <h1>Recycling & Waste</h1>
                    <p> Environmental awareness is not a trend that comes into style a few months and stops.
                        Individuals working towards making a small impact on Earth.</p>
                    <a href="#" class="active">Join us Now</a> <a href="#">More About Us</a>
                </div>
            </div>
            <img src="{{ asset('front/images/h1-slide2.jpg') }}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption">
                <div class="container">
                    <strong>It’s very harmful for everyone</strong>
                    <h1>Stop Air Pollution</h1>
                    <p> Air Pollution is another main environmental pollution faced by our world today. Air
                        pollution takes place when damaging stuff including particulates.</p>
                    <a href="#" class="active">Join us Now</a> <a href="#">More About Us</a>
                </div>
            </div>
            <img src="{{ asset('front/images/h1-slide3.jpg') }}" alt="">
        </div>
    </section>
    <!--Slider End-->
    <!--About Section Start-->
    <section class="home-about wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-txt">
                        <h2> <span>ecova.</span> is providing the best
                            solution of Eco Environment
                        </h2>
                        <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of
                            green businesses helping people save energy, water, and other resources.
                            <strong>Definitely, you can go with this business as it is a nothing but the
                                future.</strong>
                        </p>
                        <p> When you embrace eco awareness as a part of your daily life, you can defintiely think
                            about the Environment business. </p>
                        <ul>
                            <li><i class="fas fa-check"></i> Solar Energy</li>
                            <li><i class="fas fa-check"></i> Waste Management </li>
                            <li><i class="fas fa-check"></i> Eco Ideas </li>
                            <li><i class="fas fa-check"></i> Recycling Materials</li>
                            <li><i class="fas fa-check"></i> Plant Ecology</li>
                            <li><i class="fas fa-check"></i> Saving Wildlife </li>
                        </ul>
                        <a class="lm" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-pic">
                        <div class="pic1">
                            <div id="pic-slider" class="owl-carousel owl-theme">
                                <div class="item"><img src="{{ asset('front/images/aboutpic1.jpg') }}" alt="">
                                </div>
                                <div class="item"><img src="{{ asset('front/images/aboutpic3.jpg') }}" alt="">
                                </div>
                                <div class="item"><img src="{{ asset('front/images/aboutpic5.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pic2"><img src="{{ asset('front/images/aboutpic2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section End-->
    <!--Services Slider Start-->
    <section class="home-services wf100 p80bottom">
        <div class="row">
            <!--Services Box Start-->
            <div class="ser-col">
                <div class="ser-box">
                    <div class="ser-thumb">
                        <a href="#"><i class="fas fa-link"></i></a>
                        <img src="{{ asset('front/images/serimg1.jpg') }}" alt="">
                    </div>
                    <div class="ser-txt">
                        <h4> <a href="#">Control Pollution & Environment</a> </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <!--Services Box End-->
            <!--Services Box Start-->
            <div class="ser-col">
                <div class="ser-box">
                    <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                            src="{{ asset('front/images/serimg2.jpg') }}" alt=""></div>
                    <div class="ser-txt">
                        <h4> <a href="#">Save World’s
                                Water Resources</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <!--Services Box End-->
            <!--Services Box Start-->
            <div class="ser-col">
                <div class="ser-box">
                    <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                            src="{{ asset('front/images/serimg3.jpg') }}" alt=""></div>
                    <div class="ser-txt">
                        <h4> <a href="#">Recycling & Waste
                                Management</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <!--Services Box End-->
            <!--Services Box Start-->
            <div class="ser-col">
                <div class="ser-box">
                    <div class="ser-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                            src="{{ asset('front/images/serimg4.jpg') }}" alt=""></div>
                    <div class="ser-txt">
                        <h4> <a href="#">Save Plants &
                                Forest Planting</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <!--Services Box End-->
            <!--Services Box Start-->
            <div class="ser-col">
                <div class="ser-box">
                    <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                            src="{{ asset('front/images/serimg5.jpg') }}" alt=""></div>
                    <div class="ser-txt">
                        <h4> <a href="#">Implement Solar
                                & Wind Energies</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
            <!--Services Box End-->
        </div>
        <div class="load-more text-center w-100"> <a href="#" class="lm">View More Work</a> </div>
    </section>
    <!--Services Slider End-->
    <!--News Post Section Start-->
    <section class="news-posts wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--title start-->
                    <div class="section-title">
                        <strong>Our Latest</strong>
                        <h2>News Posts</h2>
                    </div>
                    <!--title end-->
                    <div class="blog-list wf100">
                        <!--Blog Post Start-->
                        <div class="blog-post wf100">
                            <div class="blog-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                    src="{{ asset('front/images/np1.jpg') }}" alt=""></div>
                            <div class="blog-txt">
                                <h5><a href="#">How you can keep alive wild animals for a long period.</a>
                                </h5>
                                <ul class="post-meta">
                                    <li><span>By:</span> Danial John</li>
                                    <li><span>Posted:</span> 29 September, 2018</li>
                                </ul>
                                <p> According to a survey the perceived higher cost of environmentally-friendly
                                    products is the major holdup to consumers going green. </p>
                            </div>
                        </div>
                        <!--Blog Post End-->
                        <!--Blog Post Start-->
                        <div class="blog-post wf100">
                            <div class="blog-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                                    src="{{ asset('front/images/np2.jpg') }}" alt=""></div>
                            <div class="blog-txt">
                                <h5><a href="#">Eliminate your plastic bottle pollution
                                        and keep safe.</a>
                                </h5>
                                <ul class="post-meta">
                                    <li><span>By:</span> Danial John</li>
                                    <li><span>Posted:</span> 29 September, 2018</li>
                                </ul>
                                <p> It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchange it was popularised in letraset
                                    sheets.</p>
                            </div>
                        </div>
                        <!--Blog Post End-->
                        <!--Blog Post Start-->
                        <div class="blog-post wf100">
                            <div class="blog-thumb"><a href="#"><i class="fas fa-link"></i></a> <img
                                    src="{{ asset('front/images/np3.jpg') }}" alt=""></div>
                            <div class="blog-txt">
                                <h5><a href="#">The effort to GoGreen has been felt
                                        across industries.</a>
                                </h5>
                                <ul class="post-meta">
                                    <li><span>By:</span> Danial John</li>
                                    <li><span>Posted:</span> 29 September, 2018</li>
                                </ul>
                                <p> There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words.
                                </p>
                            </div>
                        </div>
                        <!--Blog Post End-->
                    </div>
                </div>
                <div class="col-md-4">
                    <!--title start-->
                    <div class="section-title">
                        <strong>Our Next</strong>
                        <h2>Events</h2>
                    </div>
                    <!--title end-->
                    <div class="event-posts wf100">
                        <!--Blog Post Start-->
                        <div class="event-post">
                            <div class="event-thumb">
                                <a href="#"><i class="fas fa-link"></i></a> <img
                                    src="{{ asset('front/images/ep1.jpg') }}" alt="">
                                <ul class="post-meta">
                                    <li>29 August, 2018 </li>
                                    <li> 08:00 am - 01:00 pm</li>
                                </ul>
                            </div>
                            <div class="event-txt">
                                <h6><a href="#">Forest Planting Campaign</a></h6>
                                <p><i class="fas fa-map-marker-alt"></i> Green Gardendening Center, New York, USA
                                </p>
                            </div>
                        </div>
                        <!--Blog Post End-->
                        <!--Blog Post Start-->
                        <div class="event-post">
                            <div class="event-thumb">
                                <a href="#"><i class="fas fa-link"></i></a> <img
                                    src="{{ asset('front/images/ep1.jpg') }}" alt="">
                                <ul class="post-meta">
                                    <li>29 August, 2018 </li>
                                    <li> 08:00 am - 01:00 pm</li>
                                </ul>
                            </div>
                            <div class="event-txt">
                                <h6><a href="#">Save Energy by Solar System</a></h6>
                                <p><i class="fas fa-map-marker-alt"></i> Electric Open Area, New York, USA </p>
                            </div>
                        </div>
                        <!--Blog Post End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Post Section End-->
    <!--Current Promises Section Start-->
    <section class="promises wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="pro-title">
                        <h2>Current Promises</h2>
                        <h3>Save Water, Energey, Control Pollution
                            & Environment, Wildlife, Forest Planting
                            Implementation of Solar System.
                        </h3>
                    </div>
                    <ul class="counter">
                        <li>
                            <p class="counter-count">59000</p>
                            <p class="ctxt">Trees Planted</p>
                        </li>
                        <li>
                            <p class="counter-count">69000</p>
                            <p class="ctxt">Solar Panels in 2017</p>
                        </li>
                        <li>
                            <p class="counter-count">49000</p>
                            <p class="ctxt">Wildlife Saved</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="volunteer-form">
                        <div class="section-title">
                            <strong>Join Us Now</strong>
                            <h2>Become Volunteer</h2>
                        </div>
                        <ul>
                            <li>
                                <input type="text" class="form-control" placeholder="Your Name"
                                    aria-label="Your Name">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Email Address"
                                    aria-label="Email Address">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Contact" aria-label="Contact">
                            </li>
                            <li>
                                <input type="submit" class="fsubmit" value="Signup to Join us Now">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Current Promises Section End-->
    <!--Partner Logos Section Start-->
    <div class="partner-logos wf100 mb80">
        <div class="container">
            <div id="partner-logos" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('front/images/plogo1.png') }}" alt=""></div>
                <div class="item"><img src="{{ asset('front/images/plogo2.png') }}" alt=""></div>
                <div class="item"><img src="{{ asset('front/images/plogo3.png') }}" alt=""></div>
                <div class="item"><img src="{{ asset('front/images/plogo4.png') }}" alt=""></div>
            </div>
        </div>
    </div>
    <!--Partner Logos Section End-->
@endsection

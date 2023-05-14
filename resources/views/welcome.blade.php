@extends('layouts.main')

@section('content')
    <section id="home-slider" class="owl-carousel owl-theme wf100">
        @forelse($banners as $banner)
            <div class="item">
                <div class="slider-caption">
                    <div class="container">
                        @if ($banner->title_small)
                            <strong>{{ $banner->title_small }}</strong>
                        @endif
                        @if ($banner->title_big)
                            <h1>{{ $banner->title_big }}</h1>
                        @endif
                        @if ($banner->description)
                            {!! $banner->description !!}
                        @endif
                        <a href="{{ route('contact.us') }}" class="active">Entrer en contact</a> <a
                            href="{{ route('about.us') }}">Nous connaitre</a>
                    </div>
                </div>
                <img src="{{ asset('storage/banners/' . $banner->image . '') }}" alt="{{ $banner->title_small }}">
            </div>
        @empty
        @endforelse
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
                        <strong>Actualités</strong>
                        <h2>Récentes</h2>
                    </div>
                    <!--title end-->
                    <div class="blog-list wf100">
                        @forelse($latest_posts as $post)
                            <!--Blog Post Start-->
                            <div class="blog-post wf100">
                                <div class="blog-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('storage/posts/' . $post->image . '') }}" alt=""></div>
                                <div class="blog-txt">
                                    <h5><a href="#">{{ $post->title }}</a>
                                    </h5>
                                    <ul class="post-meta">
                                        <li><span>par:</span> Admin</li>
                                        <li><span>Posté le</span> {{ date('d-m-Y', strtotime($post->published_at)) }}</li>
                                    </ul>
                                    {!! Illuminate\Support\Str::limit($post->description, 80, $end = '...') !!}
                                </div>
                            </div>
                            <!--Blog Post End-->
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-md-4">
                    <!--title start-->
                    <div class="section-title">
                        <strong>Récentes</strong>
                        <h2>Réalisations</h2>
                    </div>
                    <!--title end-->
                    <div class="event-posts wf100">
                        @forelse($latest_works as $work)
                            <!--Blog Post Start-->
                            <div class="event-post">
                                <div class="event-thumb">
                                    <a href="#"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('storage/works/' . $work->image . '') }}" alt="">
                                    {{-- <ul class="post-meta">
                                        <li>29 August, 2018 </li>
                                        <li> 08:00 am - 01:00 pm</li>
                                    </ul> --}}
                                </div>
                                <div class="event-txt">
                                    <h6><a href="#">{{ $work->title }}</a></h6>
                                    {!! Illuminate\Support\Str::limit($work->description, 80, $end = '...') !!}
                                </div>
                            </div>
                            <!--Blog Post End-->
                        @empty
                        @endforelse
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
                @forelse($partners as $partner)
                    <div class="item"><img src="{{ asset('storage/partners/' . $partner->logo . '') }}"
                            alt="{{ $partner->url }}" style="width:auto;height:100px"></div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!--Partner Logos Section End-->
@endsection

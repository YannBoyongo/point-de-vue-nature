@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Publication</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="{{ route('post.list') }}"> Publications </a></li>
                <li><a href="#">{{ $post->title }}</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <!--Blog Single Content Start-->
                        <div class="blog-single-content">
                            <div class="blog-single-thumb"><img src="{{ asset('storage/posts/' . $post->image . '') }}"
                                    alt="{{ $post->title }}"></div>
                            <h3>{{ $post->title }}</h3>
                            <ul class="post-meta">
                                <li><i class="fas fa-user-circle"></i> John Ashley</li>
                                <li><i class="fas fa-calendar-alt"></i>{{ date('d-m-Y', strtotime($post->published_at)) }}
                                </li>
                                <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a
                                        href="#">Trees</a> <a href="#">Water</a> <a href="#">Recycling</a>
                                </li>
                            </ul>
                            {!! $post->description !!}
                        </div>
                        <!--Blog Single Content End-->
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Search</h5>
                                <div class="side-search">
                                    <form>
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!--Widget End-->

                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>News & Articles</h5>
                                <ul class="lastest-products">
                                    <li> <img src="images/flp1.jpg" alt=""> <strong><a href="#">How you can
                                                keep alive wild animals for...</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                    <li> <img src="images/flp2.jpg" alt=""> <strong><a href="#">Eliminate
                                                your plastic bottle pollution</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                    <li> <img src="images/flp3.jpg" alt=""> <strong><a href="#">How you can
                                                keep alive wild animals for...</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                </ul>
                            </div>
                            <!--Widget Start-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Tags</h5>
                                <div class="single-post-tags"> <a href="#">Solar Energy</a> <a href="#">
                                        Plant Ecology </a> <a href="#"> Wildlife </a> <a href="#"> Eco Ideas
                                    </a> <a href="#"> Waste Management </a> <a href="#"> Water </a> <a
                                        href="#"> Forest Planting </a> <a href="#"> Donation </a> <a
                                        href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div>
                            </div>
                            <!--Widget End-->
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
    </section>
    <!--Blog End-->
@endsection

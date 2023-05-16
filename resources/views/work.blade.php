@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Réalisations</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="{{ route('work.list') }}"> Réalisations </a></li>
                <li><a href="#">{{ $work->title }}</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->

    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            <!--Widget Start-->
                            <div class="side-widget project-list-widget">
                                <h5>Current Projects</h5>
                                <ul>
                                    <li><a href="#">Waste Management</a></li>
                                    <li><a href="#">Solar Energy</a></li>
                                    <li><a href="#">Eco Ideas</a></li>
                                    <li><a href="#">Recycling Materials</a></li>
                                    <li><a href="#">Plant Ecology</a></li>
                                    <li><a href="#">Saving Wildlife</a></li>
                                    <li><a href="#">Water Resources</a></li>
                                    <li><a href="#">Forest &amp; Tree Planting</a></li>
                                    <li><a href="#">Wing Energy</a></li>
                                </ul>
                            </div>
                            <!--Widget End-->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <!--Blog Single Content Start-->
                        <div class="blog-single-content">
                            <div class="blog-single-thumb"><img src="{{ asset('storage/works/' . $work->image . '') }}"
                                    alt="{{ $work->title }}"></div>
                            <h3>{{ $work->title }}</h3>
                            <ul class="post-meta">
                                <li><i class="fas fa-user-circle"></i> John Ashley</li>
                                <li><i class="fas fa-calendar-alt"></i> 29 September, 2018</li>
                                <li><i class="fas fa-comments"></i> 134 Comments</li>
                                <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a
                                        href="#">Trees</a> <a href="#">Water</a> <a href="#">Recycling</a>
                                </li>
                            </ul>
                            {!! $work->description !!}
                        </div>
                        <!--Blog Single Content End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog End-->
@endsection

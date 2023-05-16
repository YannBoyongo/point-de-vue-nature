@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Publication</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="#">{{ $post->title }}</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
@endsection

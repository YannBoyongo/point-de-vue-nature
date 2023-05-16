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
@endsection

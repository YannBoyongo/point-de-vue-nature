@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Réalisations</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="#">Réalisations</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Causes Start-->
    <section class="wf100 p80 events">
        <div class="event-posts">
            <div class="container">
                <div class="row">
                    @forelse($works as $work)
                        <!--Blog Post Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="event-post">
                                <div class="event-thumb">
                                    <a href="{{ route('work.show', $work) }}"><i class="fas fa-link"></i></a> <img
                                        src="{{ asset('storage/works/' . $work->image . '') }}" alt="">
                                </div>
                                <div class="event-txt">
                                    <h5><a href="{{ route('work.show', $work) }}">{{ $work->title }}</a>
                                    </h5>
                                    <p>{!! Illuminate\Support\Str::limit($work->description, 80, $end = '...') !!} </p>
                                </div>
                            </div>
                        </div>
                        <!--Blog Post End-->
                    @empty
                        <h2>Aucune réalisations trouvées</h2>
                    @endforelse
                    @if ($works->hasPages())
                        <div class="gt-pagination">
                            {{ $works->links() }}
                        </div>
                    @endif
                </div>
            </div>
    </section>
@endsection

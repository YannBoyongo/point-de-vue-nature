@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Publications</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="#">Publications</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <!--Blog Small Post Start-->
                    <div class="col-md-6">
                        <div class="blog-small-post">
                            <div class="post-thumb"> <a href="{{ route('post.show', $post) }}"><i
                                        class="fas fa-link"></i></a> <img
                                    src="{{ asset('storage/posts/' . $post->image . '') }}" alt=""> </div>
                            <div class="post-txt">
                                <span class="pdate"> <i class="fas fa-calendar-alt"></i>
                                    {{ date('d-m-Y', strtotime($post->published_at)) }}</span>
                                <h5><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></h5>
                                <p>{!! Illuminate\Support\Str::limit($post->description, 50, $end = '...') !!}</p>
                                <a href="{{ route('post.show', $post) }}" class="rm">Lire plus</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>Aucune publications trouvées</h2>
                @endforelse
                @if ($posts->hasPages())
                    <div class="gt-pagination">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--Blog Small Post End-->
@endsection

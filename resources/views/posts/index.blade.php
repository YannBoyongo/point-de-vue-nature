@extends('layouts.app', ['current' => 'posts'])

@section('title', 'posts')
@section('styles')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/jquery-confirm/dist/jquery-confirm.min.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Publications') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">{{ __('Toutes les actualités') }}</h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#postStoreModal">
                                    <i class="fas fa-plus mr-2"></i>
                                    {{ __('Ajouter une actualité') }}
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover  table-sm text-nowrap">
                                <thead class="tbl-head bg-dark-light">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Titre') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th style="width: 15%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($posts->isNotEmpty())
                                        @forelse($posts as $post)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>

                                                    @if ($post->image)
                                                        <img class="mr-2" width="40" height="40"
                                                            src="{{ asset('storage/posts/' . $post->image . '') }}"
                                                            style="object-fit: cover; object-position: center"
                                                            alt="{{ $post->title }}">
                                                    @else
                                                        <img class="mr-2" width="40" height="40"
                                                            src="{{ asset('images/no-image.jpg') }}"
                                                            style="object-fit: cover; object-position: center"
                                                            alt="unknown">
                                                    @endif

                                                </td>
                                                <td>
                                                    <a href="{{ route('posts.edit', $post) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ ($post and $post->status == 1) ? 'Publié' : 'Broullion' }}
                                                </td>
                                                <td class="d-flex justify-content-end">
                                                    <a href="{{ route('posts.edit', $post->id) }}">
                                                        <i class="fa mr-2 fa-edit text-warning"
                                                            title="{{ __('Modifier') }}"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" style="text-align: center;">
                                                    {{ __('Aucune actualité enregistrée!') }}</td>
                                            </tr>
                                        @endforelse
                                    @else
                                        <tr>
                                            <td colspan="5" style="text-align: center;">
                                                {{ __('Aucune actualité enregistrée!') }}
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        @if ($posts->hasPages())
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item">
                                        <a class="btn btn-default btn-sm {{ $posts->onFirstPage() ? 'disabled' : null }}"
                                            href="{{ $posts->previousPageUrl() }}">&laquo;</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="{{ $posts->nextPageUrl() }}"
                                            class="btn btn-default btn-sm {{ !$posts->hasMorePages() ? 'disabled' : null }}">&raquo;</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  ADD banner MODAL --}}
    <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="postStoreModal" tabindex="-1" aria-labelledby="postStoreModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="postStoreModalLabel">{{ __('AJOUTER UNE ACTUALITE') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">{{ __('Titre') }}</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" rows="5" name="title"
                                        placeholder="{{ __('Entrer Texte') }}">
                                    @error('title')
                                        <span class="small text-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">{{ __('Image') }}<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="{{ old('image') }}" type="file" class="custom-file-input"
                                                name="image" id="image" accept="image/*">
                                            <label class="custom-file-label"
                                                for="image">{{ __('Choisir image') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center p-0">
                                        <img class="img-thumbnail w-100" id="banner_img"
                                            src="{{ asset('images/no-image.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ __('Annuler') }}</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-2"></i>
                                {{ __('Enregistrer') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

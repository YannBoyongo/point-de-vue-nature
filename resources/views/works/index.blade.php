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
                    <h1 class="m-0">{{ __('Réalisations') }}</h1>
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
                            <h2 class="card-title">{{ __('Toutes les réalisations') }}</h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#postStoreModal">
                                    <i class="fas fa-plus mr-2"></i>
                                    {{ __('Ajouter une réalisation') }}
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
                                    @if ($works->isNotEmpty())
                                        @forelse($works as $work)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>

                                                    @if ($work->image)
                                                        <img class="mr-2" width="40" height="40"
                                                            src="{{ asset('storage/works/' . $work->image . '') }}"
                                                            style="object-fit: cover; object-position: center"
                                                            alt="{{ $work->title }}">
                                                    @else
                                                        <img class="mr-2" width="40" height="40"
                                                            src="{{ asset('images/no-image.jpg') }}"
                                                            style="object-fit: cover; object-position: center"
                                                            alt="unknown">
                                                    @endif

                                                </td>
                                                <td>
                                                    <a href="{{ route('works.edit', $work) }}">
                                                        {{ $work->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ ($work and $work->status == 1) ? 'Publié' : 'Broullion' }}
                                                </td>
                                                <td class="d-flex justify-content-end">
                                                    <a href="{{ route('works.edit', $work->id) }}">
                                                        <i class="fa mr-2 fa-edit text-warning"
                                                            title="{{ __('Modifier') }}"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" style="text-align: center;">
                                                    {{ __('Aucune réalisation enregistrée!') }}</td>
                                            </tr>
                                        @endforelse
                                    @else
                                        <tr>
                                            <td colspan="5" style="text-align: center;">
                                                {{ __('Aucune réalisation enregistrée!') }}
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        @if ($works->hasPages())
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item">
                                        <a class="btn btn-default btn-sm {{ $works->onFirstPage() ? 'disabled' : null }}"
                                            href="{{ $works->previousPageUrl() }}">&laquo;</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="{{ $works->nextPageUrl() }}"
                                            class="btn btn-default btn-sm {{ !$works->hasMorePages() ? 'disabled' : null }}">&raquo;</a>
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
    <form enctype="multipart/form-data" action="{{ route('works.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="postStoreModal" tabindex="-1" aria-labelledby="postStoreModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="postStoreModalLabel">{{ __('AJOUTER UNE REALISATION') }}</h5>
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

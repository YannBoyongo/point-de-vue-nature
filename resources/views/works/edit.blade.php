@extends('layouts.app', ['current' => 'works'])

@section('title', 'works')
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
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Modifier cette Réalisation') }}</h3>
                        </div>

                        <form action="{{ route('works.update', $work->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="hidden" name="wordId" value={{ $work->id }}>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">{{ __('Titre') }}</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer titre') }}" name="title" id="title"
                                                value="{{ old('title', $work->title) }}">
                                            @error('title')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">{{ __('Breve description') }}</label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{ old('description', $work->description) }}</textarea>
                                            @error('description')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex">
                                <div class="flex-grow-1">
                                    <button type="button" class="btn bg-gradient-danger" data-toggle="modal"
                                        data-target="#deleteModal">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </div>
                                <div class="flex-grow-1 text-right">
                                    @if ($work->status == 0)
                                        <a href="{{ route('works.publish', $work) }}" class="btn btn-success">
                                            {{ _('Publier') }}
                                            <i class="fa fa-success ml-2"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('works.unpublish', $work) }}" class="btn btn-danger">
                                            {{ _('Retirer') }}
                                            <i class="fa fa-danger ml-2"></i>
                                        </a>
                                    @endif
                                    <button type="submit" class="btn btn-primary">
                                        {{ _('Enregister') }}
                                        <i class="fa fa-save ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header card-outline card-primary">
                            <h3 class="card-title">
                                {{ __('Image') }}<span class="text-danger">*</span>
                            </h3>
                        </div>
                        @if ($work->image)
                            <div class="card-body text-center p-0">
                                <img class="img-thumbnail w-100" src="{{ asset('storage/works/' . $work->image . '') }}"
                                    alt="{{ $work->title }}">
                            </div>
                            <form method="POST" action="{{ route('works.delete.image', $work->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </div>
                            </form>
                        @else
                            <form enctype="multipart/form-data" role="form" method="POST"
                                action="{{ route('works.add.image', $work->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" accept="image/*">
                                                <label class="custom-file-label"
                                                    for="image">{{ __('Choisir image') }}</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button name="submit" type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
                                        <i class="fas fa-save ml-2"></i>
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>Status: <b>{{ ($work and $work->status == 1) ? 'Publié' : 'Broullion' }}</b></p>
                            @if ($work->published_at)
                                <p>Publié le:
                                    <b>{{ ($work and $work->published_at) ? date('d-m-Y', strtotime($work->published_at)) : $work->created_at }}</b>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DELETE banner MODAL --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('works.destroy', $work->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="slug" id="modal_delete_slug">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">{{ __('Supprimer projet') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ __('Êtes-vous sûr de vouloir supprimer ce projet?') }} "<span class="text-bold"
                            id="modal_delete_title"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            {{ __('Annuler') }}
                            <i class="fa fa-times ml-2"></i>
                        </button>
                        <button type="submit" class="btn btn-danger">
                            {{ __('Supprimer') }}
                            <i class="fa fa-trash-alt ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

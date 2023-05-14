@extends('layouts.app', ['current' => 'banners'])

@section('title', 'Edit banner')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Modifier une bannière') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Modifier une bannière') }}</h3>
                        </div>

                        <form action="{{ route('banners.update', $banner->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="hidden" name="bannerId" value={{ $banner->id }}>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title_small">{{ __('Petit Titre') }} <small>[Fr]</small></label>
                                            <input type="text" class="form-control" placeholder="{{ __('Petit Titre') }}"
                                                name="title_small" id="title_small"
                                                value="{{ old('title_small', $banner->title_small) }}">
                                            @error('title_small')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title_big">{{ __('Grand Titre') }} <small>[Fr]</small></label>
                                            <input type="text" class="form-control" placeholder="{{ __('Grand Titre') }}"
                                                name="title_big" id="title_big"
                                                value="{{ old('title_big', $banner->title_big) }}">
                                            @error('title_big')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">{{ __('Breve description') }}</label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{ old('description', $banner->description) }}</textarea>
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
                        @if ($banner->image)
                            <div class="card-body text-center p-0">
                                <img class="img-thumbnail w-100"
                                    src="{{ asset('storage/banners/' . $banner->image . '') }}"
                                    alt="{{ __('Bannière') }}">
                            </div>
                            <form method="POST" action="{{ route('banners.delete.image', $banner->id) }}">
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
                                action="{{ route('banners.add.image', $banner->id) }}">
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
                </div>
            </div>
        </div>
    </div>
    {{-- DELETE banner MODAL --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="slug" id="modal_delete_slug">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">{{ __('Supprimer une bannière') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ __('Êtes-vous sûr de vouloir supprimer cette bannière?') }} "<span class="text-bold"
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

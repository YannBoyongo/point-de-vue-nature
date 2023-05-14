@extends('layouts.app')
@section('title', 'Settings')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Paramètres') }}</h1>
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
                            <h3 class="card-title">{{ __('Paramètres') }}</h3>
                        </div>

                        <form action="{{ route('settings.update', $setting->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">{{ __('Nom') }}</label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer le nom') }}" name="name" id="name"
                                                value="{{ old('name', $setting->name) }}">
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tagline">{{ __('tagline') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer tagline') }}" name="tagline" id="tagline"
                                                value="{{ old('tagline', $setting->tagline) }}">
                                            @error('tagline')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_1">{{ __('email 1') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer Email') }}" name="email_1" id="email_1"
                                                value="{{ old('email_1', $setting->email_1) }}">
                                            @error('email_1')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_2">{{ __('email 2') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer email_2') }}" name="email_2" id="email_2"
                                                value="{{ old('email_2', $setting->email_2) }}">
                                            @error('email_2')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_1">{{ __('Phone 1') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer phone_1') }}" name="phone_1" id="phone_1"
                                                value="{{ old('phone_1', $setting->phone_1) }}">
                                            @error('phone_1')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_2">{{ __('Phone 2') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer phone_2') }}" name="phone_2" id="phone_2"
                                                value="{{ old('phone_2', $setting->phone_2) }}">
                                            @error('phone_2')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">{{ __('address') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer address') }}" name="address" id="address"
                                                value="{{ old('address', $setting->address) }}">
                                            @error('address')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook">{{ __('facebook') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer facebook') }}" name="facebook" id="facebook"
                                                value="{{ old('facebook', $setting->facebook) }}">
                                            @error('facebook')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="linkedin">{{ __('linkedin') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer linkedin') }}" name="linkedin" id="linkedin"
                                                value="{{ old('linkedin', $setting->linkedin) }}">
                                            @error('linkedin')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="twitter">{{ __('twitter') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer twitter') }}" name="twitter" id="twitter"
                                                value="{{ old('twitter', $setting->twitter) }}">
                                            @error('twitter')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="youtube">{{ __('youtube') }} </label>
                                            <input type="text" class="form-control"
                                                placeholder="{{ __('Entrer youtube') }}" name="youtube" id="youtube"
                                                value="{{ old('youtube', $setting->youtube) }}">
                                            @error('youtube')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex">
                                <div class="flex-grow-1 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{ _('Modifier') }}
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
                                {{ __('Logo du site') }}<span class="text-danger">*</span>
                            </h3>
                        </div>
                        @if ($setting->logo)
                            <div class="card-body text-center p-0">
                                <img class="img-thumbnail w-100"
                                    src="{{ asset('storage/settings/' . $setting->logo . '') }}"
                                    alt="{{ __('Logo') }}">
                            </div>
                            <form method="POST" action="{{ route('delete.logo', $setting) }}">
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
                                action="{{ route('add.logo', $setting) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="logo" accept="image/*">
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
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#about'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#goal'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

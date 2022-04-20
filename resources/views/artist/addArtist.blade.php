{{-- Cet template étant le template contenant le layout --}}
{{-- /ressources/views/layout.blade.php --}}
@extends('layout')


{{-- la section content remonte dans la section (@yield('content')) définie dans le layout --}}
@section('content')
<main class="main-container page-content">
    <h1 class="main-title">Faire une proposition d'artiste</h1>


    @if ($errors->any())
    <p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </p>
    @endif


    <form action="{{ route('submitArtist') }}" method="POST" enctype="multipart/form-data" class="form-default form-artiste">
        {{-- Le tag blade @csrf insère automatiquement pour nous un token --}}
        {{-- qui permettra de confirmer que les données arrivent de notre formulaire --}}
        {{-- et ont bien été transmis par notre utilisateur --}}
        {{-- https://laravel.com/docs/9.x/blade#csrf-field --}}
        @csrf


        <div class="input-group">
            <label class="main-label" for="artist-name">Nom de l'artiste</label>
            <input type="text" name="name" id="artist-name" placeholder="Nom de l'artiste" value="{{ old('name') }}">
        </div>
        <div class="input-group">
            <label class="main-label" for="artist-image">Photo de l'artiste</label>
            <input type="file" name="image" id="artist-image">
        </div>
        <div class="input-group">
            <label class="main-label" for="artist-description">Description</label>
            <textarea name="description" id="artist-description" cols="30" rows="5" placeholder="Description">{{ old('description') }}</textarea>
        </div>
        <div class="input-group">
            <label class="main-label">Genre</label>
            <div class="radio-group">

                @foreach ($categories as $category)
                <div class="radio-item">
                    <input type="radio" name="category_id" id="artist-genre-{{ $category->id }}" value="{{ $category->id }}" 
                    @if (old('category_id') == $category->id) checked @endif>
                    <label for="artist-genre-{{ $category->id }}">{{ $category->name }}</label>
                </div>
                @endforeach

            </div>

        </div>
        <div class="input-group">
            <label class="main-label" for="artist-video">Vidéo de présentation</label>
            <input type="text" name="url_video" id="artist-video" placeholder="https://youtube.com/idvideo" value="{{ old('url_video') }}">
        </div>
        <div class="input-group">
            <label class="main-label" for="artist-albums">Albums</label>
            <textarea type="text" name="album" cols="30" rows="5" id="artist-albums" placeholder="Un album par ligne">{{ old('album') }}</textarea>
        </div>
        <div class="input-group">
            <button class="btn btn-primary btn-icon-left" type="submit">
                <i class="fa-solid fa-check"></i>
                Proposer
            </button>
        </div>
    </form>
</main>

@endsection
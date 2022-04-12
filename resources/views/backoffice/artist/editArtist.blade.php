@extends('layout')

<head>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

@section('content')

<main class="main-container page-content">
    <h1 class="main-title">Modifier un artiste</h1>
    <a href="/backoffice">Revenir au Backoffice</a>

        @if ($errors->any())
        <div>
            <strong>Oops !</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="form-default form-artiste" method="PATCH" action="{{route('updateArtist', $selectedArtist->id)}}">
            @csrf
            @method('PATCH')

            <div class="input-group">
                <label class="main-label" for="artist-name">Nom de l'artiste</label>
                <input type="text" name="name" id="artist-name" placeholder="Nom de l'artiste" value="{{$selectedArtist->name}}">
            </div>
            <div class="input-group">
                <label class="main-label" for="artist-name">Photo de l'artiste</label>
                <input type="text" name="image" id="artist-picture" placeholder="Photo de l'artiste" value="{{$selectedArtist->image}}">
            </div>
            <!-- <div class="input-group">
                <label class="main-label" for="artist-picture">Photo de l'artiste</label>
                <input type="file" name="artist-picture" id="artist-picture">
            </div> -->
            <div class="input-group">
                <label class="main-label" for="artist-description">Description</label>
                <textarea name="description" id="artist-description" cols="30" rows="5" placeholder="Description" value="{{$selectedArtist->description}}"></textarea>
            </div>
            <div class="input-group">
                <label class="main-label">Genre</label>
                <div class="radio-group">
                    @foreach($categories as $category)
                    <div class="radio-item">
                        <input type="radio" name="category_id" id="artist-genre-{{$category->id}}" value="{{$category->id}}"
                        @if($selectedArtist->category_id == $category->id) checked @endif>
                        <label for="artist-genre-{{$category->id}}">{{$category->name}}</label>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="input-group">
                <label class="main-label" for="artist-video">Vidéo de présentation</label>
                <input type="text" name="url_video" id="artist-video"  placeholder="https://youtube.com/idvideo" value="{{$selectedArtist->url_video}}">
            </div>
            <div class="input-group">
                <label class="main-label" for="artist-albums">Albums</label>
                <textarea type="text" name="album" cols="30" rows="5" id="artist-albums" value="{{$selectedArtist->album}}" placeholder="Un album par ligne"></textarea>
            </div>
            <div class="input-group">
                <button class="btn btn-primary btn-icon-left" id="submit-button" type="submit">
                    <i class="fa-solid fa-check"></i>
                    Modifier
                </button>
            </div>
        </form>
    </main>

@endsection
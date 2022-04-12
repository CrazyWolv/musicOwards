@extends('layout')

@section('content')

    <main class="main-container page-content">
        <h1 class="main-title">Faire une proposition d'artiste</h1>

        <form class="form-default form-artiste" method="POST" action="{{ route('submitArtist') }}">
            @csrf
            <div class="input-group">
                <label class="main-label" for="artist-name">Nom de l'artiste</label>
                <input type="text" name="artist-name" id="artist-name" placeholder="Nom de l'artiste" required>
            </div>
            <div class="input-group">
                <label class="main-label" for="artist-name">Photo de l'artiste</label>
                <input type="text" name="artist-picture" id="artist-picture" placeholder="Photo de l'artiste" required>
            </div>
            <!-- <div class="input-group">
                <label class="main-label" for="artist-picture">Photo de l'artiste</label>
                <input type="file" name="artist-picture" id="artist-picture" required>
            </div> -->
            <div class="input-group">
                <label class="main-label" for="artist-description">Description</label>
                <textarea name="artist-description" id="artist-description" cols="30" rows="5" placeholder="Description" required></textarea>
            </div>
            <div class="input-group">
                <label class="main-label">Genre</label>
                <div class="radio-group">
                    @foreach($categories as $category)
                    <div class="radio-item">
                        <input type="radio" name="artist-genre" id="artist-genre-{{$category->id}}" value="{{$category->id}}" required>
                        <label for="artist-genre-{{$category->id}}">{{$category->name}}</label>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="input-group">
                <label class="main-label" for="artist-video">Vidéo de présentation</label>
                <input type="text" name="artist-video" id="artist-video"  placeholder="https://youtube.com/idvideo" required>
            </div>
            <div class="input-group">
                <label class="main-label" for="artist-albums">Albums</label>
                <textarea type="text" name="artist-albums" cols="30" rows="5" id="artist-albums" required placeholder="Un album par ligne"></textarea>
            </div>
            <div class="input-group">
                <button class="btn btn-primary btn-icon-left" id="submit-button" type="submit">
                    <i class="fa-solid fa-check"></i>
                    Proposer
                </button>
            </div>
        </form>
    </main>

@endsection
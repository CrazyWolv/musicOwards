@extends('layout')

<head>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

@section('content')

    <main class="main-container page-content">
        <div class="hero-title-group">
            <div class="inner">
                <h1 class="main-title">Tous les artistes</h1>
            </div>
        </div>

        @if(session()->has('success'))
        <div id="flash" class="flash-message">
            <p>{{ session()->get('success') }}</p>
            <button class="close-button"><i class="fa fa-close"></i></button>
        </div>
        @endif

        @if($errors->any())
        <div id="flash" class="flash-message">
            <p>Erreur : {{ $errors }}</p>
            <button class="close-button"><i class="fa fa-close"></i></button>
        </div>
        @endif

        <div class="all-artists">
        <div style="background:linear-gradient(31deg, #8f59ce 0%, #e04452 100%);padding:20px 25px;border-radius:10px;margin:0 auto 30px auto;max-width:400px;text-align:center;"><a style="color:#fff;" href="/backoffice/artist/create">Ajouter un artiste</a></div>
        <div style="background:linear-gradient(31deg, #8f59ce 0%, #e04452 100%);padding:20px 25px;border-radius:10px;margin:0 auto 30px auto;max-width:400px;text-align:center;"><a style="color:#fff;" href="/backoffice/">Retour au backoffice</a></div>

            <div class="artists-list artists-list-4">

                @foreach($artists as $artist)
                    <div class="artist">
                        <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="/img/{{ $artist->image }}"></a>
                        <div class="artist-content">
                            <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">{{$artist->name}}</h3></a>
                            <span class="artist-genre">
                                <a href="category.html">{{ $artist->category->name }}</a>
                            </span>
                            <div class="artist-votes">
                                <span class="artist-votes-dislike is-active">
                                    <i class="fa-solid fa-thumbs-down"></i>
                                    <span class="artist-votes-count">{{ $artist->votes->where("result", -1)->count() }}</span>
                                </span>
                                <span class="artist-votes-like">
                                    <i class="fa-solid fa-heart"></i>
                                    <span class="artist-votes-count">{{ $artist->votes->where("result", 1)->count() }}</span>
                                </span>
                            </div>
                        </div>
                        <a href="/backoffice/artist/edit/{{$artist->id}}">Editer</a>
                        <a href="/backoffice/artist/delete/{{$artist->id}}">Supprimer</a>
                    </div>
                @endforeach

            </div>
    </main>

    <script src="/js/main.js"></script>

@endsection
@extends('layout')

@section('content')

    <main class="main-container homepage">
        <div class="hero-title-group">
            <div class="inner">
                <h1 class="main-title">Votez pour l'artiste de l'année</h1>
                <p class="subtitle">Celui ou celle qui obtiendra le plus de votes, gagnera ... un magnifique mug O'clock.</p>
            </div>
        </div>

        <div class="trending-artists">
            <h2 class="secondary-title">En vedette</h2>
            
            <div class="artists-list artists-list-3">
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/incubus.jpg"></a>
                    <span class="artist-genre">
                        <a href="category.html">Rock</a>
                    </span>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Incubus</h3></a>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">2</span>
                            </span>
                            <span class="artist-votes-like is-active">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">2680</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/foo-fighters.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Foo Fighters</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike is-active">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">5</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">3860</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/igorrr.png"></a>
                    <span class="artist-genre">
                        <a href="category.html">Métal</a>
                    </span>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Igorrr</h3></a>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">150</span>
                            </span>
                            <span class="artist-votes-like is-active">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">4012</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-artists">
            <h2 class="secondary-title">Tous les artistes</h2>

            <div class="artists-list artists-list-4">

            @foreach($artists as $artist)
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/{{$artist->image}}"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">{{$artist->name}}</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rap</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike is-active">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">27</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">3</span>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>

@endsection
{{-- Cet template étant le template contenant le layout --}}
{{-- /ressources/views/layout.blade.php --}}
@extends('layout')


{{-- la section content remonte dans la section (@yield('content')) définie dans le layout --}}
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
            
            
            
            
            @foreach ($topArtists as $artist)
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="{{ Storage::url($artist->image) }}"></a>
                    <span class="artist-genre">
                        <a href="category.html">{{ $artist->category->name }}</a>
                    </span>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link">
                            <h3 class="artist-name">{{ $artist->name }}</h3>
                        </a>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">{{ $artist->votes->where("result", -1)->count() }}</span>
                            </span>
                            <span class="artist-votes-like is-active">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">{{ $artist->votes->where("result", 1)->count() }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
    <div class="all-artists">
        <h2 class="secondary-title">Tous les artistes</h2>

        <div class="artists-list artists-list-4">




            @foreach ($artists as $artist)
            <div class="artist">
                <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="{{ Storage::url($artist->image) }}"></a>
                <div class="artist-content">
                    <a href="artiste.html" class="artist-name-link">
                        <h3 class="artist-name">{{ $artist->name }}</h3>
                    </a>
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
            </div>
            @endforeach




        </div>
    </div>
</main>

@endsection
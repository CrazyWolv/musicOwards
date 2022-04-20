@extends('backoffice/layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ajouter un nouvel artiste</h1>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('boArtistAddSubmit') }}" method="POST" enctype="multipart/form-data">
                

                {{-- on inclut le formulaire dans notre template --}}
                {{-- il faut envoyer les data dans cet élément inclus --}}
                @include('backoffice/artist/form', ['categories' => $categories, 'artist' => $artist])

            </form>
        </div>
    </div>
</div>
    
@endsection
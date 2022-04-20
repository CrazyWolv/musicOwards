{{-- Cet template étant le template contenant le layout --}}
{{-- /ressources/views/layout.blade.php --}}
@extends('layout')


{{-- la section content remonte dans la section (@yield('content')) définie dans le layout --}}
@section('content')
<main class="main-container page-content">
    <h1 class="main-title">Faire une proposition d'artiste</h1>

    <div class="flash-message">
        <p>Merci. Votre proposition a bien été envoyée.</p>
        <button class="close-button"><i class="fa fa-close"></i></button>
    </div>


    <div>
        <img src="img/giphy.gif">
    </div>

</main>

@endsection
@extends('layout')

@section('content')

    <main class="main-container page-content">
        <h1 class="main-title">Merci d'avoir proposé un artiste !</h1>

        <img class="confirmimage" src="https://media.giphy.com/media/VIoJEvVTq8X1R3fqP7/giphy.gif" />

        <div class="flash-message">
            <p>Votre proposition a bien été envoyée.</p>
            <button class="close-button"><i class="fa fa-close"></i></button>
        </div>
    </main>
    
@endsection
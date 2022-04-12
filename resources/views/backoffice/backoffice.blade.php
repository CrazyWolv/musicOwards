@extends('layout')

<head>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

@section('content')
<main class="main-container page-content">
    <h1 class="main-title">Bienvenue dans le Backoffice !</h1>

    <div class="trending-artists">
        <div style="background:linear-gradient(31deg, #8f59ce 0%, #e04452 100%);padding:20px 25px;border-radius:10px;margin:30px auto;max-width:400px;text-align:center;"><a style="color:#fff;" href="/backoffice/categories">Liste des catégories</a></div>
        <div style="background:linear-gradient(31deg, #8f59ce 0%, #e04452 100%);padding:20px 25px;border-radius:10px;margin:30px auto;max-width:400px;text-align:center;"><a style="color:#fff;" href="/backoffice/artists">Liste des artistes</a></div>
    </div>
</main>

@endsection
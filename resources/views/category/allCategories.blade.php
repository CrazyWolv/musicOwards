@extends('layout')

<head>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

@section('content')

    <main class="main-container page-content">
        <div class="hero-title-group">
            <div class="inner">
                <h1 class="main-title">Toutes les Catégories</h1>
            </div>
        </div>
        <div class="all-artists">

            <div class="artists-list artists-list-4">
            @foreach($categories as $category)
                <p class="categorylist">{{$category->name}}</p>
            @endforeach
            </div>
    </main>

@endsection
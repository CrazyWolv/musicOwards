<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Owards</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <header>
        <a href="/" class="site-title"><i class="fa-solid fa-compact-disc"></i>Music Owards</a>

        <nav class="main-nav">
            <ul class="main-nav-list">
                <li class="main-nav-item is-active"><a href="{{ route('addArtist') }}" class="main-nav-link">Proposer un artiste</a></li>
                <li class="main-nav-item"><a href="category.html" class="main-nav-link">Catégorie</a></li>
                <li class="main-nav-item"><a href="artiste.html" class="main-nav-link">Artiste</a></li>
                @if (!Auth::user())
                <li class="main-nav-item"><a href="{{ route('login') }}" class="main-nav-link">Se connecter</a></li>
                @else
                <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button type="submit">se deconnecter</button>
                </form>
                @endif
            </ul>
        </nav>
        
        {{-- route() permet de récupérer la route dont le name est 'addArtist' --}}
        <a href="{{ route('addArtist') }}" class="btn btn-primary" id="btn-add-artist">Proposer un artiste</a>
    </header>


    {{-- les templates qui étendront ce layout pourront faire une section avec du contenu --}}
    {{-- qui sera inscrit à cet emplacement --}}
    @yield('content')

    

    <footer>
        <p>Copyright &copy; 2022 - Music Owards</p>
    </footer>

    <script src="js/main.js"></script>
    
</body>
</html>
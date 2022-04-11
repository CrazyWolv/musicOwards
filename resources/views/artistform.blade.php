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
        <a href="form" class="btn btn-primary" id="btn-add-artist">Proposer un artiste</a>
    </header>

    <main class="main-container page-content">
        <h1 class="main-title">Faire une proposition d'artiste</h1>

        <div class="flash-message">
            <p>Merci. Votre proposition a bien été envoyée.</p>
            <button class="close-button"><i class="fa fa-close"></i></button>
        </div>

        <form class="form-default form-artiste" method="POST" action="/">
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
    

    <footer>
        <p>Copyright &copy; 2022 - Music Owards</p>
    </footer>
    
    <script src="js/main.js"></script>
</body>
</html>
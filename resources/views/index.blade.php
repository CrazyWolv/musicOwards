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
        <a href="index.html" class="site-title"><i class="fa-solid fa-compact-disc"></i>Music Owards</a>

        <nav class="main-nav">
            <ul class="main-nav-list">
                <li class="main-nav-item is-active"><a href="form-artiste.html" class="main-nav-link">Proposer un artiste</a></li>
                <li class="main-nav-item"><a href="category.html" class="main-nav-link">Catégorie</a></li>
                <li class="main-nav-item"><a href="artiste.html" class="main-nav-link">Artiste</a></li>
            </ul>
        </nav>
        
        <a href="form-artiste.html" class="btn btn-primary" id="btn-add-artist">Proposer un artiste</a>
    </header>

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
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/jul.png"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Jul</h3></a>
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
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/vald.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Vald</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rap</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">2</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">86</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/vianney.jpeg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Vianney</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Chanson française</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">6</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/marcel.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Marcel et son Orchestre</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">45</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">266</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/night-verses.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Night Verses</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Métal</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">87</span>
                            </span>
                            <span class="artist-votes-like is-active">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">568</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/artic-monkeys.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Artic Monkeys</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">36</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">420</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/cage-the-elephant.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Cage the elephant</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">43</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">860</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/white-stripes.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">White Stripes</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">66</span>
                            </span>
                            <span class="artist-votes-like is-active">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">480</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/rhcp.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Red Hot Chili Peppers</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Rock</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">78</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">536</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/rihanna.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Rihanna</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">R&b</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">36</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">120</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/selah-sue.jpg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Selah Sue</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Folk</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">14</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">365</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="artist">
                    <a href="artiste.html" class="artist-img-link"><i class="fa fa-eye"></i><img src="img/sia.jpeg"></a>
                    <div class="artist-content">
                        <a href="artiste.html" class="artist-name-link"><h3 class="artist-name">Sia</h3></a>
                        <span class="artist-genre">
                            <a href="category.html">Pop</a>
                        </span>
                        <div class="artist-votes">
                            <span class="artist-votes-dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span class="artist-votes-count">39</span>
                            </span>
                            <span class="artist-votes-like">
                                <i class="fa-solid fa-heart"></i>
                                <span class="artist-votes-count">423</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright &copy; 2022 - Music Owards</p>
    </footer>
    
</body>
</html>
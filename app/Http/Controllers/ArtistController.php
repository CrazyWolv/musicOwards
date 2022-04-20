<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Controller qui affichera le formulaire 
     */
    public function addArtist()
    {
        // on intéroge la BDD grâce à notre modèle Category pour lister toutes les catégories
        $categories = Category::get();

        // création du tableau de data pour la view
        $data = [];

        // la clé correspondra à une variable
        // disponible dans notre view
        $data['categories'] = $categories;

        // appel de la view qui est retournée
        return view('artist/addArtist', $data);
    }

    /**
     * Réception des données du formulaire 
     * et enregistrement dans la base de données
     * @param mixed $request Dependance injection
     * @property string $name name of the artist
     * @property string $image image of the artist
     * @property string $description description of the artist
     * @property int $category_id genre of the artist
     * @property string $url_video video of the artist
     * @property string $album album of the artist
     */
    public function submitArtist(Request $request) 
    {
        // on contrôle les données obligatoires
        $request->validate([
            'name' => 'required|min:3|max:255',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'url_video' => 'required',
            'album' => 'required'
        ]);




        // récupération des valeurs transmises notre formulaire
        $name = $request->input('name');
        //$image = $request->input('image');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        $url_video = $request->input('url_video');
        $album = $request->input('album');

        // stockage de l'image dans le dossier /storage/app/public/images/
        $image = $request->file('image')->store('public/images');

        // On peuple les données de notre modèles Artist
        $artist = new Artist();
        $artist->name = $name;
        $artist->image = $image;
        $artist->description = $description;
        $artist->category_id = $category_id;
        $artist->url_video = $url_video;
        $artist->album = $album;

        // sauvegarde notre modele
        // (notre modèle n'ayant pas été peuplé depuis une lecture dans la BDD, 
        // cela correspondra à un insert)
        $artist->save();

        
        // redirection vers la page confirmation
        return redirect(route('confirmArtist'));

        // il recommandé de rediriger vers une page de confirmation 
        // au lieu de simplement afficher une view de confirmation 
        // à ce niveau. 
        // Ainsi si l'utilisateur relaod la page de confirmation, 
        // cela ne déclenchera pas un nouvel enregistrement dans la base de données
    }

    /**
     * Page de confirmation d'enregistrement d'un artiste
     */
    public function confirmArtist()
    {
        return view('artist/confirmArtist');
    }
}

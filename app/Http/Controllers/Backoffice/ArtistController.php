<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;


class ArtistController extends Controller
{
    /**
     * Affiche la liste complète de tous les artistes
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function list()
    {
        // appel de la vue liste en transmettant tous les artistes
        return view('backoffice/artist/list', [
            'artists' => Artist::all()
        ]);
    }

    /**
     * Affichage du formulaire de création d'un nouvel artiste
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        // appel de la vue du formulaire avec en data transmises :
        // - Toutes les catégories
        // - Un artiste
        //   (vide car j'ai mutualisé une partie de formulaire avec la version en édition)
        return view('backoffice/artist/add', [
            'categories' => Category::all(),
            'artist' => new Artist()
        ]);
    }
    
    /**
     * Traitement du formulaire de création d'un artiste
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addSubmit(Request $request)
    {
        // on contrôle les données obligatoires (pour la création)
        $request->validate([
            'name' => 'required|min:3|max:255',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'url_video' => 'required',
            'album' => 'required'
        ]);

        // J'ai mutualisé l'enregistement (création et modification)
        // Je transmet l'objet request et un model Artist vide.
        // Aller voir la nuance avec la méthode editSubmit().
        return $this->save($request, new Artist());
    }

    /**
     * Affichage du formulaire en modification
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        // appel de la vue du formulaire en edit
        // transmission des catégories
        // On charge les données de l'artiste dont l'id a été transmis
        return view('backoffice/artist/edit', [
            'categories' => Category::all(),
            'artist' => Artist::find($id)
        ]);
    }

    /**
     * Traitement du formulaire de modification d'un artiste
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function editSubmit(Request $request, int $id)
    {
        // on contrôle les données obligatoires (pour la modification, l'image n'est pas obligatoire)
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'url_video' => 'required',
            'album' => 'required'
        ]);

        // charge l'artiste
        $artist = Artist::find($id);

        // J'ai mutualisé l'enregistement (création et modification)
        // Je transmet l'objet request et le model Artist qui a été chargé.
        // Aller voir la nuance avec la méthode addSubmit().
        return $this->save($request, $artist);
    }

    /**
     * Methode qui gère la sauvegarde d'un artiste (en création ou modification)
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    private function save(Request $request, Artist $artist)
    {
        // récupération des valeurs transmises via notre formulaire (création ou modification)
        $name = $request->input('name');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        $url_video = $request->input('url_video');
        $album = $request->input('album');

        // stockage de l'image dans le dossier /storage/app/public/images/
        $image = null;
        if ($request->file('image')) { // l'image n'est pas obligatoire pour le formulaire en modification
            $image = $request->file('image')->store('public/images');
        }

        // On peuple les données de notre modèle Artist
        $artist->name = $name;
        if ($image) { // l'image n'est pas obligatoire pour le formulaire en modification
            $artist->image = $image;
        }
        $artist->description = $description;
        $artist->category_id = $category_id;
        $artist->url_video = $url_video;
        $artist->album = $album;

        // sauvegarde notre modele
        $artist->save();

        // redirection vers la liste des artistes
        return redirect(route('boArtist'));
    } 

    /**
     * Suppression d'un artiste
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(int $id)
    {
        // charge l'artiste à supprimer
        $artist = Artist::find($id);

        // supprime l'artiste s'il existe dans la base
        if ($artist) {
            $artist->delete();
        }

        // redirection vers la liste des artistes
        return redirect(route('boArtist'));
    }
}

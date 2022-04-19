<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;

class ArtistController extends Controller
{
    public function getArtists(){
        $artists = Artist::all();
        $data = [];
        $data['artists'] = $artists;

        return view('artist/allArtists', $data);
    }

    public function addArtist(){
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;

        return view('artist/addArtist', $data);
    }

    public function submitArtist(Request $request){
        // dd($request);

        // Validation security
        $request->validate([
            'artist-name' => 'required|min:3|max:255',
            'artist-description' => 'required|min:3|max:255',
            'artist-picture' => 'required',
            'artist-video' => 'required',
            'artist-albums' => 'required',
            'artist-genre' => 'required|exists:categories,id',
        ]);
             
        // récupération des valeurs
        $name = $request->input('artist-name');
        $description = $request->input('artist-description');
        $image = $request->input('artist-picture');
        $url_video = $request->input('artist-video');
        $album = $request->input('artist-albums');
        $genre = $request->input('artist-genre');

        // Création d'un nouvel artiste
        $artist = new Artist;
        $artist->name = $name;
        $artist->description = $description;
        $artist->image = $image;
        $artist->url_video = $url_video;
        $artist->album = $album;
        $artist->category_id = $genre;
        
        // $reqPost = $request->all();
        // dump($reqPost);
        // exit();

        // dd($artist);

        // Enregistrement de la nouvelle instance en BDD
        $artist->save();

        // Redirection de l'utilisateur pour éviter
        // que l'user inscrive 50 fois son formulaire
        // dans la BDD
        return view('artist/confirmArtist');
    }

    public function confirmArtist(){
        return view('artist/confirmArtist');
    }
}

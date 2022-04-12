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




    // CRUD
    public function getArtistsBack(){
        $artists = Artist::all();
        $data = [];
        $data['artists'] = $artists;

        return view('backoffice/artist/allArtists', $data);
    }

    public function createArtist(){
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;

        return view('backoffice/artist/createArtist', $data);
    }

    public function newArtist(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'image' => 'required',
            'url_video' => 'required',
            'album' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Artist::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'url_video' => $request->input('url_video'),
            'album' => $request->input('album'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('allArtists')
            ->with('success', 'Artiste ajouté avec succès !');
    }

    public function editArtist($id){
        $selectedArtist = Artist::find($id);
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;
        return view('backoffice/artist/editArtist', compact('selectedArtist'), $data);
    }

    public function updateArtist(Request $request, $id){
        // Validation security
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'image' => 'required',
            'url_video' => 'required',
            'album' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        // récupération de l'artiste concerné
        $selectedArtist = Artist::find($id);

        // récupération des valeurs et changement
        $selectedArtist->name = $request->input('name');
        $selectedArtist->description = $request->input('description');
        $selectedArtist->image = $request->input('image');
        $selectedArtist->url_video = $request->input('url_video');
        $selectedArtist->album = $request->input('album');
        $selectedArtist->category_id = $request->input('category_id');
        
        $selectedArtist->save();

        return redirect()->route('allArtists')
            ->with('success', 'Artiste modifié avec succès !');
    }

    public function deleteArtist(){

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;

class BackOfficeArtistController extends Controller
{
        // CRUD
        public function bckGetArtists(){
            $artists = Artist::all();
            $data = [];
            $data['artists'] = $artists;
    
            return view('backoffice/artist/allArtists', $data);
        }
    
        public function bckCreateArtist(){
            $categories = Category::all();
            $data = [];
            $data['categories'] = $categories;
    
            return view('backoffice/artist/createArtist', $data);
        }
    
        public function bckNewArtist(Request $request){
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
    
        public function bckEditArtist($id){
            $selectedArtist = Artist::find($id);
            $categories = Category::all();
            $data = [];
            $data['categories'] = $categories;
            return view('backoffice/artist/editArtist', compact('selectedArtist'), $data);
        }
    
        public function bckUpdateArtist(Request $request, $id){
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
    
        public function bckDeleteArtist(int $id){
            $selectedArtist = Artist::find($id);
    
            if ($selectedArtist) {
                $selectedArtist->delete();
            }
    
            return redirect()->route('allArtists')
                ->with('success', 'Artiste supprimé avec succès !');
        }
}

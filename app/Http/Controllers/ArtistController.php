<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;

class ArtistController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;

        return view('artistform', $data);
    }

    public function addArtist(Request $request){
        $artist = new Artist;
        $artist->name = $request->input('artist-name');
        $artist->description = $request->input('artist-description');
        $artist->image = $request->input('artist-picture');
        $artist->url_video = $request->input('artist-video');
        $artist->album = $request->input('artist-albums');
        $artist->category_id = $request->input('artist-genre');
        
        // dump($reqProps);
        // exit();

        // dump($artist);
        $artist->save();
    }
}

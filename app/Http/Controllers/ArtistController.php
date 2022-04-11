<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function addArtist(Request $request){
        $reqProps = $request->all();
        $artist = new Artist;
        
        dump($reqProps);
        exit();

        // $artist->save();
    }
}

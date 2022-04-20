<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

/**
 * Homepage Controller - show the homepage view
 */

class HomeController extends Controller
{
    /**
     * Return homepage view
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     **/
    public function index()
    {
        // On récupère tous les artistes
        $artists = Artist::get();


        // on récupère 3 artistes tirés aléatoirement
        $topArtists = Artist::inRandomOrder()->limit(3)->get() ;


        // création du tableau de data pour la view
        $data = [];

        // la clé correspondra à une variable
        // disponible dans notre view
        $data['artists'] = $artists;
        $data['topArtists'] = $topArtists;

        // appel de la view
        return view('index', $data);
    }
}

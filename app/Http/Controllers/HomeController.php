<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class HomeController extends Controller
{
    public function index()
    {
        // on récupère TOUS les artistes
        $artists = Artist::get();

        // on récupère 3 artistes de façon random
        $topArtists = Artist::inRandomOrder()->limit(3)->get();

        // création du tableau data pour la view
        $data = [];

        // on stocke les artists récupérés dans
        // notre tableau data
        $data['artists'] = $artists;
        $data['topArtists'] = $topArtists;

        return view('index', $data);
    }
}

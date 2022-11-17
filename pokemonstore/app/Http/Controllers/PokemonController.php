<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller {
    
    public function index() {
        $viewData = [];
        $viewData['title'] = 'Pokemon Store';
        $viewData['pokemons'] = Pokemon::all();

        return view('pokemons.list')->with('viewData', $viewData);
    }

    public function show($id) {
        $viewData = [];
        $pokemon = Pokemon::findOrFail($id);
        $viewData['title'] = $pokemon->getName();
        $viewData['pokemon'] = $pokemon;

        return view('pokemons.show')->with('viewData', $viewData);
    }

}

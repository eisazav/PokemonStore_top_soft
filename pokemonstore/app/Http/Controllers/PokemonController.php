<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller {
    public function index() {
        $viewData = [];
        $viewData['title'] = 'Pokemons Online Store';
        $viewData['pokemons'] = Pokemon::all();

        return view('pokemons.list')->with('viewData', $viewData);
    }

    public function show($id) {
        $viewData = [];
        $pokemon = Pokemon::findOrFail($id);
        $viewData['title'] = $pokemon->getName() . ' - Pokemons Online Store';
        $viewData['pokemon'] = $pokemon;

        return view('pokemons.show')->with('viewData', $viewData);
    }

    public function create() {
        $viewData = [];
        $viewData['title'] = 'Create product';
        $viewData['subtitle'] = 'Creating a new Pokemon';

        return view('pokemons.create')->with('viewData', $viewData);
    }

    public function save(Request $request) {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weakness' => 'required',
            'ablity' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'evolution' => 'required',
            'stat_hp' => 'required',
            'stat_attack' => 'required',
            'stat_defense' => 'required',
            'stat_special_attack' => 'required',
            'stat_special_defense' => 'required',
            'stat_speed' => 'required',
            'ofTheMonth' => 'required',
            'image' => 'required',
        ]);
        $finalData = $request->only([
            'name',
            'type',
            'weakness',
            'ablity',
            'height',
            'weight',
            'description',
            'cost',
            'evolution',
            'stat_hp',
            'stat_attack',
            'stat_defense',
            'stat_special_attack',
            'stat_special_defense',
            'stat_speed',
            'ofTheMonth',
            'image',
        ]);
        Pokemon::create($finalData);

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class ProductController extends Controller {
    public function index() {
        $viewData = [];
        $viewData['title'] = 'Pokemon Online Store';
        $viewData['subtitle'] = 'List of pokemon';
        $viewData['pokemons'] = Pokemon::all();

        return view('pokemon.index')->with('viewData', $viewData);
    }

    public function show($id) {
        $viewData = [];
        $pokemon = Pokemon::findOrFail($id);
        $viewData['title'] = $pokemon['name'].' - Pokemon Online Store';
        $viewData['subtitle'] = $pokemon['name'].' - Pokemon information';
        $viewData['pokemon'] = $pokemon;

        return view('pokemon.show')->with('viewData', $viewData);
    }

    public function create() {
        $viewData = [];
        $viewData['title'] = 'Create product';
        $viewData['subtitle'] = 'Creating a new Pokemon';

        return view('pokemon.create')->with('viewData', $viewData);
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
        ]);
        Pokemon::create($finalData);

        return back();
    }
}

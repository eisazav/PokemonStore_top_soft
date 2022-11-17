<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller {

    public function index() {
        $viewData = [];
        $viewData['title'] = 'Pokemon Store';
        $viewData['pokemons'] = Pokemon::all();

        return view('admin.pokemons.list')->with('viewData', $viewData);
    }

    public function show($id) {
        $viewData = [];
        $pokemon = Pokemon::findOrFail($id);
        $viewData['title'] = $pokemon->getName();
        $viewData['pokemon'] = $pokemon;

        return view('admin.pokemons.show')->with('viewData', $viewData);
    }

    public function create() {
        $viewData = [];
        $viewData['title'] = 'Create product';
        $viewData['subtitle'] = 'Creating a new Pokemon';

        return view('admin.pokemons.create')->with('viewData', $viewData);
    }

    public function save(Request $request) {

        Pokemon::validate($request);
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
            'of_the_month',
            'image',
        ]);
        Pokemon::create($finalData);


        return redirect()->route('admin.pokemons.list');
    }

    public function update($id) {
        $viewData = [];
        $pokemon = Pokemon::findOrFail($id);
        $viewData['title'] = 'update'.$pokemon->getName() . ' - Pokemons Online Store';
        $viewData['pokemon'] = $pokemon;

        return view('admin.pokemons.update')->with('viewData', $viewData);
    }

    public function storageupdate(Request $request)
    {  
        Pokemon::validate($request);
        $pokemon = Pokemon::findOrFail($request["id"]);
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
            'of_the_month',
            'image',
        ]);

        foreach ($finalData as $key => $value) {
            $pokemon[$key] = $value;
        }
        
        $pokemon->save();
        
        return redirect()->route('admin.pokemons.list');
    }

    public function destroy($id) {
        Pokemon::destroy($id);
        return redirect()->route('admin.pokemons.list');
    }

}

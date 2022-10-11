<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box;
use App\Models\Pokemons;

class BoxController extends Controller {
    public function index() {
        $viewData = [];
        $viewData['title'] = 'Pokemons Online Store';
        $viewData['boxes'] = Box::all();

        return view('box.list')->with('viewData', $viewData);
    }

    public function show($id) {
        $viewData = [];
        $box = Box::findOrFail($id);
        $pokemons = $box->getBoxItems($id);
        $viewData['title'] = $box->getName() . ' - Pokemons Online Store';
        $viewData['box'] = $box;
        $viewData['pokemons'] = $pokemons;

        return view('box.show')->with('viewData', $viewData);
    }

    public function create() {
        $viewData = [];
        $viewData['title'] = 'Create box';
        $viewData['subtitle'] = 'Creating a new Box';

        return view('box.create')->with('viewData', $viewData);
    }

    public function save(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
        $finalData = $request->only([
            'name',
        ]);
        Box::create($finalData);

        return back();
    }
}

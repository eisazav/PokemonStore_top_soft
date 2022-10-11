<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PokemonResource;
use App\Http\Controllers\Controller;
use App\Models\Pokemon;

class PokemonApi extends Controller {
    public function index() {
        return PokemonResource::collection(Pokemon::all());
    }

    public function show($id) {
        return PokemonResource::make(Pokemon::findOrFail($id));
    }

    public function paginate() {
        return PokemonResource::collection(Pokemon::paginate(10));
    }
}

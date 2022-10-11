<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BoxResource;
use App\Http\Controllers\Controller;
use App\Models\Box;

class BoxApi extends Controller {
    public function index() {
        return BoxResource::collection(Box::all());
    }

    public function show($id) {
        return BoxResource::make(Box::findOrFail($id));
    }

    public function paginate() {
        return BoxResource::collection(Box::paginate(10));
    }
}

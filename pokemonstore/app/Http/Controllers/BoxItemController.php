<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoxItem;

class BoxItemController extends Controller {
    public function save(Request $request) {
        $request->validate([
            'box_id' => 'required',
            'pokemon_id' => 'required',
        ]);
        $finalData = $request->only([
            'box_id',
            'pokemon_id',
        ]);
        BoxItem::create($finalData);

        return back();
    }
}

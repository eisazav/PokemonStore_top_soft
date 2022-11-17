<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class ExternalApi extends Controller

{
    public function index()
    {
        $news = Http::get("https://www.pokemon.com/us/pokemon-news/")->json();
        $viewData = [];
        $viewData['tittle'] = 'External API - Online Store';
        $viewData['subtitle'] = 'Pokemon News';
        $random = rand(0, count($news['articles']) - 1);
        $viewData['new'] = $news['articles'][$random];
        return view('api.news')->with('viewData', $viewData);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Order;

use App\Models\Pokemon;
use App\Models\Box;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["orders"]= Order::orderBy('id', 'DESC')->get();
        $viewData["pokemons"]= Pokemon::orderBy('id', 'DESC')->get();
        $viewData["boxes"]= Box::orderBy('id', 'DESC')->get();
        return view('home.home')->with('viewData',$viewData);
    }

}

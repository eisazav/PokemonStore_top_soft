<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pokemon;
use App\Models\Box;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["pokemons"]= Pokemon::orderBy('id', 'DESC')->get();
        $viewData["boxes"]= Box::orderBy('id', 'DESC')->get();
        $viewData["users"]= User::orderBy('id', 'DESC')->get();
        $viewData["orders"]= Order::orderBy('id', 'DESC')->get();
        return view('admin.home')->with('viewData',$viewData);
    }

}
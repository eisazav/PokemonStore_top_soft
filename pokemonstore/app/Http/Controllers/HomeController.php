<?php

namespace App\Http\Controllers;
use App\Models\Order;


class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["orders"]= Order::orderBy('id', 'DESC')->get();
        return view('home.home')->with('viewData',$viewData);
    }

}
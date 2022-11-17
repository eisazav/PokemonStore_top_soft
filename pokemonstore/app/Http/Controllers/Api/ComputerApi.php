<?php

namespace App\http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class ComputerApi extends Controller
{
    public function index()
    {
        $computers = Http::get("http://computiendateis.tk/public/api/products")->json();
        $viewData = [];
        $viewData['tittle'] = 'CompuTienda API - Online Store';
        $viewData['subtitle'] = 'Computers';
        $viewData['computers'] = $computers['data'];
        return view('api.computers')->with('viewData', $viewData);
    }
}
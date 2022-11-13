<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Admin - Online Store";
        $orders = Order::all();

        $acumValue = 0;
        foreach ($orders as $order) {
            $acumValue = $acumValue + $order->getTotal();
        }

        $viewData["acumValue"] = "Total vendido: ".$acumValue;


        return view("admin.home.index")->with("viewData", $viewData);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{

    public function index()
    {   
        $viewData = [];
        $viewData['orders'] = Order::where('user_id',Auth::id())->get();

        return view('orders.list')->with('viewData',$viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData["order"] = $order;
        return view('orders.show')->with("viewData", $viewData);
    }


    public function save(Request $request)
    {
        Order::validate($request);
        Order::create($request->only(['status','dateOrder','dateDelivery','paymentMethods']));
        return redirect()->route('home.home');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function delete($id)
    {
        Order::destroy($id);
        return redirect()->route('home.home');
    }

    public function update(Request $request)
    {
        Order::validate($request);
        $order = Order::findOrFail($request["id"]);
        foreach ($request as $key => $value) {
            $order[$key] = $value;
        }
        $order->save();
        return redirect()->route('home.home');
    }
}
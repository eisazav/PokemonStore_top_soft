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

        return view('order.index')->with('viewData',$viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData["order"] = $order;
        return view('admin.orders.show')->with("viewData", $viewData);
    }


    public function create(Request $request)
    {
        Order::validate($request);
        Order::save($request->only(['status','dateOrder','dateDelivery','paymentMethods']));
        return redirect()->route('home');
    }

    public function delete($id)
    {
        Order::destroy($id)
        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        Order::validate($request);
        $order = Order::findOrFail($request["id"]);
        foreach ($request as $key => $value) {
            $order[$key] = $value;
        }
        $order->save();
        return redirect()->route('home');
    }
}
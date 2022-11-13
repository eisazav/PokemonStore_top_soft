<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductHistory;

class AdminProductHistoryController extends Controller
{

    public function index($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - History Products - Online Store";
        $product = Product::findOrFail($id);
        $viewData["product"] = $product;
        $viewData["history"] = ProductHistory:: where('product_id', $id)->get();
        
        return view('admin.historyProduct.index')->with("viewData", $viewData);
    }
}

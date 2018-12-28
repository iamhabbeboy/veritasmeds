<?php

namespace App\Http\Controllers;

use App\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all()->take(8);
        return view('index', compact('products'));
    }
}

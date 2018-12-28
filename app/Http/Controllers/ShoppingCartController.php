<?php

namespace App\Http\Controllers;

class ShoppingCartController extends Controller
{
    public function index($id)
    {
        return view('shopping-cart');
    }
}

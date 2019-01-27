<?php

namespace App\Http\Controllers;

use Session;
use App\Product;

class ShoppingCartController extends Controller
{
    public function index(Product $product)
    {
        if (session::has('pharm_cart')) {
            $carts = session::get('pharm_cart');
            $combine_carts = [];

            foreach ($carts as $cart) {
                $model = $product->loadProducts(['id' => array_get($cart, 'p_id')])
                    ->get()->first();
                $combine_carts[] = array_merge($model->toArray(), ['qty' => array_get($cart, 'qty')]);
            }
        }
        return view('shopping-cart', compact('combine_carts'));
    }
}

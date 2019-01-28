<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Get cart request and add to session
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // session::flush('pharm_cart');
        $this->validate($request, ['cart' => 'required', 'qty' => 'required']);
        $splice = explode(':', $request->cart);

        $storeCart = [
            'qty' => $request->qty,
            'p_id' => array_get($splice, '0'),
            'price' => array_get($splice, '1')
        ];

        if ($this->alreadyInCart($storeCart)) {
            // return $this->updateCart($storeCart);
        }
        session::push('pharm_cart', $storeCart);

        return response()->json(session('pharm_cart'));
    }

    /**
     * check if product already in cart
     *
     * @param array $request
     * @return boolean
     */
    private function alreadyInCart(array $request) : bool
    {
        if (session::has('pharm_cart')) {

            $productIncarts = session::get('pharm_cart');
            $product_ids = array_column($productIncarts, 'p_id');

            return in_array(array_get($request, 'p_id'), $product_ids) ? true : false;
        }
        return false;
    }

    private function updateCart(array $request)
    {
        if (session::has('pharm_cart')) {
            $products = session::get('pharm_cart');
            $carts = [];

            foreach ($products as $key => $product) {
                if (array_get($product, 'p_id') == array_get($request, 'p_id')) {
                    unset($products[$key]);
                }
            }
            session::push('pharm_cart', $products);
        }
    }
}

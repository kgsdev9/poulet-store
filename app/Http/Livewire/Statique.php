<?php

use App\Models\Product;

class Statique  {

    public  static function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->cover_image,
                "statut"  => $product->statut,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
    }



}

<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Welcome extends Component
{

    public $category ;

    public function mount() {

        $this->category = Category::all();

    }


    public function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "img_one" => $product->img_one,
                "statut"  => $product->statut,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
        $this->emit('updateCartCount');
    }


    public function render()
    {
        $product = Product::all();
        return view('livewire.welcome', compact('product'))->extends('layout.app')->section('content');
    }


}

<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class OtherProductComponent extends Component
{

    public $otherproducts ;

    public function mount($id_product,$id_category)  {
        $this->otherproducts=Product::where('category_id',$id_category )
        ->where('id','!=',$id_product)
        ->get();
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





        return view('livewire.other-product-component')->extends('layout.app')->section('content');
    }
}

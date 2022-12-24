<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Storecomponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount() {

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
        return view('livewire.storecomponent', [
            'product' => Product::paginate(12)
        ])->extends('layout.app')->section('content');;
    }
}

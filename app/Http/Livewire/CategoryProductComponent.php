<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CategoryProductComponent extends Component
{

    public $category;
    public $productcategory;

    public function mount ($id ) {
        $this->category  = Category::find($id);
        $this->productcategory =  Product::where('category_id','=',$this->category->id)->orderBy('name')->get();
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


        return view('livewire.category-product-component')->extends('layout.app')->section('content');
    }





}

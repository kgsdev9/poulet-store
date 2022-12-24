<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Comment;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{

    public $content ;
    public $rating ;
    public $comment ;
    public $colletiondetail;

    public function mount($id) {
        $this->colletiondetail = Product::find($id);
        $this->comment = Comment::where('product_id', $id)->get();


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


    public function addWishlist($id) {
        if(Auth::check()) {
            if(Coeur::where('user_id', Auth::user()->id)->where('product_id', $id)->exists()){
                return Redirect()->back();
            }else {
          $whishlist =  Coeur::create([
                    'user_id' => Auth::user()->id,
                    'product_id' =>$id
                  ]);
                  return Redirect()->back();
            }
        } else {
            return redirect()->route('login');
        }
    }



    public function saveComment() {

        $r =Comment::create([
            'content'=> $this->content,
            'user_id'=>Auth::user()->id,
            'rating' =>$this->rating,
            'product_id'=> $this->colletiondetail->id
        ]);
        return redirect()->route('product.detail', $this->colletiondetail);
    }



    public function render()
    {



        return view('livewire.product-detail')->extends('layout.app')->section('content');

    }
}

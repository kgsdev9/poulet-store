<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OrderComponent extends Component
{

    public $fullname ;
    public $phone ;
    public $addresse ;
    public $codeOrder ;



    public function mount() {

        $this->codeOrder ="ECOMMERCE".rand(0,432154798);

    }

    public function saveOrder() {

        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };


         $order =Order::create([
            'fullname'=> $this->fullname,
            'adresse_delivry'=> $this->addresse,
            'quantity'=> $sum_quantity,
            'user_id'=>Auth::user()->id,
            'phone'=> $this->phone,
            'code'=> $this->codeOrder,
            'payement_status' => 1
        ]);



        foreach($sesion as $s){
            $order->products()->attach( $s['product_id'],
               [
                'quantity'=>$s['quantity'],
                'amount'=>$s['price']*$s['quantity']
               ]);
         };
         session()->forget('cart');
    return redirect()->route('success.orders');

    }



    public function render()
    {

        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };



        return view('livewire.order-component', [
            'totalpanier' => $total_cart
        ])->extends('layout.app')->section('content');



    }



}

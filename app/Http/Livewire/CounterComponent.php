<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{

    protected $listeners = [
        'updateCartCount' => 'getCartCounter' ,
    ];


    public function getCartCounter() {
        count((array) session('cart')) ;
    }

    public function render()
    {
        $this->getCartCounter();
        return view('livewire.counter-component');
    }
}

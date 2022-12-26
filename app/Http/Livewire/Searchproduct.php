<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Searchproduct extends Component
{

    public String  $query = '';  

    public $job = [];

    public function updatedQuery() {

        $word ='%'  .  $this->query .  '%' ; 
       $this->job =  Product::where('name', 'like', $word)->get();
       
       
    }

    public function render()
    {   
        
        return view('livewire.searchproduct')->extends('layout.app')->section('content');
    }
}

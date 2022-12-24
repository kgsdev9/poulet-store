<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Category;
class CategoryComponent extends Component
{

    public function mount () {
        $this->category  = Category::all() ;
    }

    public function render()
    {

        return view('livewire.category-component')->extends('layout.app')->section('content');;
    }
}

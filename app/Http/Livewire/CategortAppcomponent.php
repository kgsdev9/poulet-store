<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategortAppcomponent extends Component
{

public $category ;
    public function mount(){
        $this->category = Category::orderBy('name')->take(10)->get();
    }


    public function render()
    {
        return view('livewire.categort-appcomponent');
    }
}

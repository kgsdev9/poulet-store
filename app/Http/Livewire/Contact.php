<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact')->extends('layout.app')->section('content');;
    }
}

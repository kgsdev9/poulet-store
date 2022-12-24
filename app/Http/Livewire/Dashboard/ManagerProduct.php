<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Image;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ManagerProduct extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $name;
    public $statut ;
    public $multiple_image= [];
    public $price ;
    public $quantity;
    public $image_couverture ;
    public $category ;
    public $categorie ;



    public $litedata  = true ;
    public $createdata = false ;




    public function mount()  {
        $this->category = Category::all();

    }

    public function createdata() {
        $this->litedata  = false ;
        $this->createdata= true ;
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'statut' => 'required',
            'image_couverture' => 'required',
            'multiple_image' => 'required',
            'price'  => 'required',
            'quantity' =>'required',
            'categorie' =>'required'
        ]);

     $onesvg =$this->image_couverture->store('public/product/images');
     foreach ($this->multiple_image as $key => $image) {
        $this->multiple_image[$key] = $image->store('public/test');
    }
    $this->multiple_image = json_encode($this->multiple_image);
    Image::create(['image' => $this->multiple_image]);

        Product::create([
            'name' => $this->name,
            'slug' => $this->name,
            'statut' => $this->statut,
            'img_premiere_plan' =>$onesvg,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'category_id' => $this->categorie,
        ]);

        $this->litedata  = true ;
        $this->createdata= false ;

    }

    public function destroyProduct($id) {
        $ressourcePrdouct = Product::find($id);
        $ressourcePrdouct->delete();
        return redirect()->back();
    }


    public function render()
    {

        return view('livewire.dashboard.manager-product', [
            'product_all' => Product::paginate(6)
        ])->extends('dashboard.master.master')->section('master');
    }
}


<?php

namespace App\Http\Controllers\Product;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('dashboard.productcontroller.create', compact('category'));
    }

    /**
     * Show the form for     creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productliste= Product::all();
        return view('dashboard.product.liste', compact('productliste'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'name'=>['required'],
            'statut'=>['required'],
            'description'=>['required'],
            'category_id' => ['required'],
            'price'=>['required','max:255'],
            'img_one'=>['required'],
            'img_two'=>['required'],
            'img_three'=>['required'],
            'quantity'=>['required','integer'],

        ])->validate();

        $product = new Product() ;
        $product->name = $request->name ;
        $product->slug = $request->name ;
        $product->statut = $request->statut ;
        $product->quantity = $request->quantity ;
        $product->descritpion = $request->description ;
        $product->price = $request->price ;
        $product->category_id = $request->category_id ;

        if($request->hasfile('img_one')) {
            $file = $request->file('img_one');
            $extention = $file->getClientOriginalExtension();
            $filename  = time(). '.' .$extention ;
            $file->move('cover/', $filename);
            $product->img_one = $filename;
                }

            if($request->hasfile('img_two')) {
                $file = $request->file('img_two');
                $extention = $file->getClientOriginalExtension();
                $filename  = time(). '.' .$extention ;
                $file->move('cover/', $filename);
                $product->img_two = $filename;
                    }

                if($request->hasfile('img_three')) {
                    $file = $request->file('img_three');
                    $extention = $file->getClientOriginalExtension();
                    $filename  = time(). '.' .$extention ;
                    $file->move('cover/', $filename);
                    $product->img_three= $filename;
                        }
                    $product->save();
    Alert::success('success','Produit ajouté ');
    return redirect()->route('product.liste');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Product::find($id);
        return view('dashboard.product.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Product::find($id);
        $category = Category::all();
        return view('dashboard.product.edit', compact('category', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        Validator::make($request->all(), [
           'name' => ['required', 'string'],
           'price'  =>['required'],
           'category_id' =>['required'],
           'quantity' =>['required'],
           'description' =>['required']
       ])->validate();


        $product->name = $request->name ;
       $product->slug = $request->name ;
       $product->statut = $request->statut ;
       $product->quantity = $request->quantity ;
       $product->descritpion = $request->description ;
       $product->price = $request->price ;
       $product->category_id = $request->category_id ;


   if($request->hasFile('img_one')) {
    $request->hasFile('img_one');
    $chemin = 'cover/'.$product->img_one;
    if(File::exists($chemin)) {
    $docs =    File::delete($chemin) ;
    }
    $file = $request->file('img_one');
    $extention  = $file->getClientOriginalExtension();
    $firstchemin = time().'.'.$extention;
    $file->move('cover/' ,$firstchemin);
    $product->img_one = $firstchemin;
 }


 if($request->hasFile('img_two')) {
    $chemin = 'cover/'.$product->img_two;
    if(File::exists($chemin)) {
    $docs =    File::delete($chemin) ;
    }
    $file = $request->file('img_two');
    $extention  = $file->getClientOriginalExtension();
    $twochemin = time().'.'.$extention;
    $file->move('cover/' , $twochemin);
    $product->img_two = $twochemin;
 }

 if($request->hasFile('img_three')) {
    $chemin = 'cover/'.$product->img_three;
    if(File::exists($chemin)) {
    $docs =    File::delete($chemin) ;
    }
    $file = $request->file('img_three');
    $extention  = $file->getClientOriginalExtension();
    $threechemin = time().'.'.$extention;
    $file->move('cover/' ,$threechemin);
    $product->img_three = $threechemin;
 }

$product->update();
Alert::success('success','Produit Modifié');
return redirect()->route('product.liste');

}






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}

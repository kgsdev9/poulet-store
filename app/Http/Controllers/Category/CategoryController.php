<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function create() {
        return view('dashboard.category.create');
    }

    public function store(Request $request) {
        $data = $request->input();
        // $files = $request->file();

        Validator::make($data, [
            'name' => 'required',
            'description' => 'required'

        ])->validate();

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('categorie/images/' , $filename);
         }
       Category::create([
            'name' => $data['name'],
            'image' =>$filename,
             'description' =>$data['description'],
        ]);

      return redirect()->route('category.liste');

    }


    public function destroy($id) {
        $destroy = Category::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function liste() {
        $category = Category::paginate(10);
        return view('dashboard.category.liste', compact('category'));
    }

    public function edit($id) {
        $edit  = Category::find($id);
        return view('dashboard.category.edit', compact('edit'));
    }

    public function update( Request $request , int $id)  {
        $update  = Category::find($id);
        $update->name = $request->input('name');
        $update->description = $request->input('description');
        if($request->hasFile('image')) {
            $chemin = 'categorie/images/'.$update->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('categorie/images/' , $filename);
            $update->image  = $filename;
         }

         $update->update();
         Alert::success('Modification', 'Informations  Modifiées avec succès');
         return redirect()->route('category.liste');

    }



}

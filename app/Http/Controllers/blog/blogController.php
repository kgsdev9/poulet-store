<?php

namespace App\Http\Controllers\blog;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class blogController extends Controller
{
    public function  create() {

        
        return view('dashboard.blogs.create');

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
            $file->move('articles/images/' , $filename);
         }
       Article::create([
            'name' => $data['name'],
            'slug' => $data['name'],
            'image' =>$filename,
             'description' =>$data['description'],
        ]);

      return redirect()->route('blog.liste');

    }



    public function liste() {
        $blog  = Article::paginate(10);
        return view('dashboard.blogs.liste', compact('blog'));
    }


    public function destroy($id) {
        $ressource  = Article::find($id);
        $ressource->delete();
         return  redirect()->back();
    }


    public function edit($id) {
        $edit  = Article::find($id);
        return view('dashboard.blogs.edit', compact('edit'));
    }

    public function update( Request $request , int $id)  {
        $update  = Article::find($id);
        $update->name = $request->input('name');
        $update->description = $request->input('description');
        if($request->hasFile('image')) {
            $chemin = 'articles/images/'.$update->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('articles/images/' , $filename);
            $update->image  = $filename;
         }

         $update->update();
         Alert::success('Modification', 'Informations  Modifiées avec succès');
         return redirect()->route('blog.liste');

    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    //
    public function indexAjax(){
        $products=Product::get('name');
        $data= [];
        foreach($products as $item){
          $data[] = $item['name'];
        }
        return $data;
    }

        public function shearchcateProduct(Request $request){
            $input = $request->input();
            if($input['searchproduct']==null){
                return redirect()->back();
            }else{
                $product = Product::where('name',"LIKE",$request->input('searchproduct'))->first();
                if($product!=null){
                  return redirect()->route('product.detail',$product->id);
                }else{
                  Alert::toast('Désolé produit introuvable ! ','info');
                  return redirect()->back();
                }
            }

        }

}

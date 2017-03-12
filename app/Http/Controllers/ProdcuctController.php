<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdcuctController extends Controller
{
    public function index(){
        $listProduct = Product::all();
        return view('product.index',['list'=>$listProduct]);
    }
    public function create(){
      return view('product.create');
    }
    public function store(Request $request){
        $rules = array(
            'name'  => 'required',
            'image'   => 'required',
            'price' => 'required|numeric',
            'categories_id'=> 'required|numeric'
        );
        $validator = \Validator::make($request->all(),$rules);
        if($validator->fails()){
            return \Redirect::to('product/create')->withErrors($validator);
        }
        else{
          $pro = new Product();
          $pro->name = $request->input('name');
          $pro->price = $request->input('price');
          $pro->image = $request->input('image');
          $pro->categories_id = $request->input('categories_id');
          $pro->total=0;
          $pro->status=1;
          $pro->save();
          \Session::flash('message','Create New Success!');
          return \Redirect::to('product');
          }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        // upload image
        //dd($request->all());

        //validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required | mimes:jpeg, jpg,png,gif|max:100000',
        ]);


        $imageName =time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $product = new Product();
        $product->image =$imageName;
        $product->name =$request->name;
        $product->description =$request->description;

        $product->save();

        return back()->withSuccess('Product Created !!');

    }
}

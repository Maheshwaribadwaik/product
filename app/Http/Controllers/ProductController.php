<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $product=new Product();
        $product->first_name=$request->first_name;
        $product->last_name=$request->last_name;
        $product->mob_no=$request->mob_no;
        $product->save();


    }
}

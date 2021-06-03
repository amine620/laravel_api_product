<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all()
    {
       $products= Product::orderBy('created_at','DESC')->get();
        return response()->json(['products'=>$products]);
    }

    public function getOne($id)
    {
       $product=Product::find($id);
       return response()->json(['product'=>$product]);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function store(Request $req)
    {
        $product=new Product();
        $product->name=$req->name;
        $product->price=$req->price;
        $product->description=$req->description;
        $product->save();
    }

    function update(Request $req)
    {
        $product=Product::find($req->id);
        $product->name=$req->name;
        $product->price=$req->price;
        $product->description=$req->description;
        $product->update();
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class Productcontroller extends Controller{
    // function show($id){
    //     $product = Product::find($id);
    //     return view('products.view',['product'=>$product]);
    // }
    function show(){
         return view('products.insert');
}
    function insert(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

    }
}
?>
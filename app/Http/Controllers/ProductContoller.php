<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductContoller extends Controller
{
    public function showProduct(){
        $products = Product::all();

        $username= "Jalel";
        return view('index', [
            'products' => $products,
            'username' => $username,
        ]);
    }

    public function showListProduct(){
        $products = Product::all();

        return view('products', [
            'products' => $products,
        ]);

    }

    public function showAddProductForm(){
        return view('addProduct');
    }

    public function handleAddProduct(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->save();

        return redirect()->route('home');
    }

    public function handleDeleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return back();
    }
    public function handleEditProduct($id){
        $product = Product::find($id);
        return view('editProduct',[
            'product' => $product,
        ]);
    }
    public function handleUpdateProduct(Request $request){
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->update();

        return back();
    }
}

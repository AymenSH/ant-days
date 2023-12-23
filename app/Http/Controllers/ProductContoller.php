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
}

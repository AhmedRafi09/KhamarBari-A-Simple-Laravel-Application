<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
        return view('products')->with(['products' => $products]);
    }
}

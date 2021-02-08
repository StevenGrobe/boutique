<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        return view('product-list', ['products' => $products]);
    }

    public function price()
    {
        $products = Product::orderBy('price')->get();
        return view('product-list', ['products' => $products]);
    }

    public function id($id)
    {
        $products = Product::find($id);
        return view('product-details', ['products' => $products]);
    }

}

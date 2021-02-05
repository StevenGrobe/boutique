<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::select('SELECT * FROM products');
        // return view('product-list', ['products' => $products]);

        $products = Product::orderBy('name')->get();
        return view('product-list', ['products' => $products]);
    }

    public function price()
    {
        $products = Product::orderBy('price')->get();
        return view('product-list', ['products' => $products]);
    }

    public function one()
    {
        $products = Product::select('name', 'price')->take(1)->get();
        return view('product-list', ['products' => $products]);
    }
}

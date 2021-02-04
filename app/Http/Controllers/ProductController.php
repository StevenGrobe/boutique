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
        

        // foreach (Product::all() as $products) {
        //     echo $products->name . '</br>';
        // }
        $products = Product::orderBy('name')->get();
        return view('product-list', ['products' => $products]);
    }

    // public function id($id)
    // {
    //     $products = DB::selectOne('select * from products where id= ?', [$id]);
    //     return view('product-details', ['id' => $id, 'products'=> $products]);
    // }
    public function price()
    {
        $products = Product::orderBy('price')->get();
        return view('product-list', ['products' => $products]);
    }
    public function one()
    {
        $products = Product::all();
        return view('product-list', ['products' => $products]);
    }
}

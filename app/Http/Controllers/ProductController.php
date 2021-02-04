<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = DB::select('SELECT * FROM products');
        return view('product-list', ['products' => $products]);
    }
    public function id($id)
    {
        $products = DB::selectOne('select * from products where id= ?', [$id]);
        return view('product-details', ['id' => $id, 'products'=> $products]);
    }
}

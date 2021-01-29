<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product-list');
    }
    public function id($id)
    {
        return view('product-details', ['id' => $id]);
    }
}

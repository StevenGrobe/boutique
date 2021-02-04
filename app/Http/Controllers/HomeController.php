<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = DB::select('select * from products');
        return view('homepage', ['products' => $products]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $users = DB::select('select * from products');

        foreach ($users as $user) {
            echo $user->name . '<br />';
            echo $user->price . '<br />';
            echo $user->picture . '<br />';
            echo '<br />';
        }
        return view('homepage');
    }
}

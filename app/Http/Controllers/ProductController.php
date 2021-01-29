<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        return 'Liste des produits';
    }
    function id($id)
    {
        echo 'Fiche du produit ' . $id;
    }
}

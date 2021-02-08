<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice');
    }

    // Formulaire ajouter produit

    public function form()
    {
        return view('add');
    }
    public function result(Request $request)
    {
        $produit = new Product;
        $produit->name = $request->name;
        $produit->price = $request->price;
        $produit->picture = $request->picture;
        $produit->quantity = $request->quantity;
        $produit->category_id = $request->category_id;
        $produit->taille = $request->taille;
        $produit->weight = $request->weight;
        $produit->save();
        return view('add-result', ['produit' => $produit]);
    }

    // Liste affichage produit 

    public function list()
    {
        $products = Product::orderBy('name')->get();
        return view('list', ['products' => $products]);
    }

    // Modifier
    public function modify($id)
    {
        $products = Product::find($id);
        return view('modify', ['products' => $products]);
    }
    public function modifyresult(Request $request, $id)
    {
        $produit = Product::find($id);
        $produit->name = $request->name;
        $produit->price = $request->price;
        $produit->picture = $request->picture;
        $produit->quantity = $request->quantity;
        $produit->category_id = $request->category_id;
        $produit->taille = $request->taille;
        $produit->weight = $request->weight;
        $produit->update();
        return view('modify-result', ['produit' => $produit]);
    }
    // Supprimer
    public function delete($id)
    {
        $products = Product::destroy($id);
        return view('delete-result', ['products' => $products]);
    }
}

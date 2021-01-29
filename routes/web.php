<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page d'accueil 
Route::get('/hello', function () {
    return view('welcome');
});

// Mise en place des URL de la boutique en créant des routes
Route::get('/', function () {
    return 'Home page';
});

Route::get('/product', function () {
    return 'Liste des produits';
});

Route::get('/product/{id}', function ($id) {
    return 'Fiche produit' . ' ' . $id;
});

Route::get('/cart', function () {
    return 'Panier';
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product2', [ProductController::class, 'price']);
Route::get('/product/{id}', [ProductController::class, 'id']);
Route::get('/cart', [CartController::class, 'index']);

<?php

use App\Http\Controllers\storeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [storeController::class, 'Home']);
Route::get('/products/{id}', [storeController::class, 'detailProduk']);
Route::get('/cart/{id}', [storeController::class, 'shippingProduk']);
Route::post('/cart/{id}', [storeController::class, 'shippingProses']);
Route::get('/sukses', [storeController::class, 'sukses']);

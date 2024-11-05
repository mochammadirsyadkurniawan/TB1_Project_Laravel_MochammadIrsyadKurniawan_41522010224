<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', [ContohController::class, 'TampilContoh']);
Route::get('produk', [ProdukController::class, 'ViewProduk']);
Route::get('produk/add', [ProdukController::class, 'ViewAddProduk']);
Route::post('produk/add', [ProdukController::class, 'CreateProduk']);


Route::delete('/produk/delete/{kode_produk}', [produkController::class, 'DeleteProduk']);
Route::get('/produk/edit/{kode_produk}', [produkController::class, 'ViewEditProduk']);
Route::put('/produk/edit/{kode_produk}', [produkController::class, 'UpdateProduk']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;


Route::get(uri: '/produk/create', action: [ProdukController::class, 'create']);
Route::post(uri: '/produk', action: [ProdukController::class, 'store']);

Route::get(uri: '/produk/{id}/edit', action: [ProdukController::class, 'edit']);
Route::put(uri: '/produk/{id}', action: [ProdukController::class, 'update']);

Route::get('/produk',[ProdukController::class,'index']);
// percobaan
Route::get('/hello', function () {
    return "Halo, ini route pertama saya di Laravel!";
});

// mengambil tampilan welcome
Route::get('/home', function () {
    return view('welcome');
});

// menggunakan parameter
Route::get('/halo/{nama}', function ($nama) {
    return "Halo $nama, selamat datang di Laravel!";
});


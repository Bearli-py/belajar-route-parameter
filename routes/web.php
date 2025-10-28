<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

Route::get('/produk/{kategori}/{id}', function ($kategori, $id) { 
    return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>"; 
}); 

Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => $tempat,
        'harga' => $harga
    ]);
});
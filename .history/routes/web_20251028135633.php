<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Parser\MarkdownParserInterface;

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

Route::get('/profil/{nama}', function (MarkdownParserInterfac) {
    return "Halo, ini adalah profil milik: <b>$nama</b>";
});
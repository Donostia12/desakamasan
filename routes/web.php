<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\produk;
use App\Http\Controllers\berita;
use App\Http\Controllers\profildesa;

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
     return view('Client/home');
});

Route::get('/login', [Admin::class, 'vlogin'])->middleware('onlogin');



Route::get('home', [Admin::class, 'home'])->middleware('is_login');
Route::get('Produk', [produk::class, 'produk'])->middleware('is_login');
Route::get('profildesa', [profildesa::class, 'profildesa'])->middleware('is_login');
Route::get('berita', [berita::class, 'berita'])->middleware('is_login');
Route::get('out', [Admin::class, 'out'])->name('out')->middleware('auth');
Route::post('actlogin',[Admin::class,'actlogin']);

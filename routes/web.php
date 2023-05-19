<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\produk;
use App\Http\Controllers\berita;
use App\Http\Controllers\profildesa;
use App\Http\controllers\produkcontroller;

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

Route::resource('Produk', produkController::class)->middleware('is_login');

Route::get('home', [Admin::class, 'home'])->middleware('is_login');
// Route::get('Produk', [Admin::class, 'produk']);
Route::get('profildesa', [Admin::class, 'profildesa'])->middleware('is_login');
Route::get('berita', [Admin::class, 'berita'])->middleware('is_login');
Route::get('out', [Admin::class, 'out'])->name('out')->middleware('auth');
Route::post('actlogin',[Admin::class,'actlogin']);

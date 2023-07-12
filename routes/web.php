<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\produk;
use App\Http\Controllers\berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\profildesa;
use App\Http\controllers\produkcontroller;
use App\Http\controllers\home;
use App\Http\controllers\penguruscontroller;
use App\Http\controllers\daerahwisatacontroller;
use App\Http\controllers\profildesacontroller;
use App\Http\controllers\menubuildercontroller;
use App\Http\controllers\reviewcontroller;
use App\Http\controllers\slide;

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

Route::resource('/', home::class);
Route::resource('/slide',slide::class);
Route::get('home/{id}', [home::class, 'detail']);
Route::get('/galeri',[home::class, 'galari']);

Route::resource('review',reviewcontroller::class);
Route::get('review-detail/{id}', [reviewcontroller::class, 'detail']);
Route::post('status', [reviewcontroller::class,'perbarui'])->name('status');


Route::get('detailberita/{id}', [home::class, 'detailberita']);
Route::get('detaildaerahwisata/{id}', [home::class, 'detaildaerahwisata']);

Route::resource('daerahwisata', daerahwisatacontroller::class);
Route::get('detailwisata/{id}', [daerahwisatacontroller::class, 'detail']);
Route::get('detailpengurus/{id}', [penguruscontroller::class, 'detail']);

Route::resource('/pengurus', penguruscontroller::class);
Route::get('/login', [Admin::class, 'vlogin'])->middleware('onlogin');
Route::get('/reload',[Admin::class,'reload']);

Route::resource('Produk', produkController::class)->middleware('is_login');
Route::get('/detailproduk/{id}',[produkController::class,'detail']);

Route::get('home', [Admin::class, 'home'])->middleware('is_login');
// Route::get('Produk', [Admin::class, 'produk']);
Route::get('profildesa', [Admin::class, 'profildesa'])->middleware('is_login');

Route::resource('berita', BeritaController::class)->middleware('is_login');

Route::get('/detail-berita/{id}',[BeritaController::class,'detail']);
Route::get('out', [Admin::class, 'out'])->name('out')->middleware('auth');
Route::post('actlogin',[Admin::class,'actlogin']);

Route::resource('menubuilder', menubuildercontroller::class)->middleware('is_login');
Route::resource('profil', profildesacontroller::class)->middleware('is_login');

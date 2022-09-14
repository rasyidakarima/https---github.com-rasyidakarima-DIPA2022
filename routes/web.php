<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
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

Route::get('/', function () {
    return view('welcome');
});
//fungsi tampil data
Route::get('/Arsip-surat',[App\Http\Controllers\ArsipController::class, 'index']);

//fungsi about
Route::get('/about', function(){
    return view('about', [
        'title' => "About"
    ]);
});

//fungsi hapus data
Route::get('/hapus/{id}', [App\Http\Controllers\ArsipController::class,'destroy']);
//fungsi cari data
Route::get('/arsip/search',[App\Http\Controllers\ArsipController::class,'search']);
//arsipkan
Route::get('/arsip/form-unggah',[App\Http\Controllers\ArsipController::class,'form']);
//store
Route::post('/arsip/unggah',[App\Http\Controllers\ArsipController::class,'store']);
//lihat
Route::get('/tampil/{id}',[App\Http\Controllers\ArsipController::class,'lihat']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemesanan;
use App\Http\Controllers\admin;
use App\Http\Controllers\tiket;

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
    return view('pemesanan');
});

Auth::routes();

// Akses http://127.0.0.1:8000/admin untuk mengakses menu admin
Route::get('/admin', [admin::class, 'index'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/pemesanan', [pemesanan::class, 'create'])->name('createPemesanan');
Route::get('/pemesanan/{id}', [pemesanan::class, 'edit'])->name('editPemesanan');
Route::post('/pemesanan/{id}', [pemesanan::class, 'editProcess'])->name('editProses');
Route::post('/checkin', [pemesanan::class, 'checkIn'])->name('checkIn');
Route::get('/pemesanan/delete/{id}', [pemesanan::class, 'delete'])->name('deleteData');

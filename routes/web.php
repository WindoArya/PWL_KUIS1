<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/barang', [NavigationController::class, 'barang'])->name('barang');
Route::get('/pelanggan', [NavigationController::class, 'pelanggan'])->name('pelanggan');
Route::get('/pekerja', [NavigationController::class, 'pekerja'])->name('pekerja');
Route::get('/supplier', [NavigationController::class, 'supplier'])->name('supplier');

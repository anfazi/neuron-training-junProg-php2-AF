<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/', [BarangController::class, 'index'])->name('barang');
Route::post('add-barang', [BarangController::class, 'tambah'])->name('barang');

Route::get('edit-barang/{id}', [BarangController::class, 'editBarang'])->name('readBarang');
Route::put('update-barang', [BarangController::class, 'updateBarang'])->name('updateBarang');

Route::delete('delete-barang', [BarangController::class, 'deleteBarang'])->name('deleteBarang');

<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// menampilkan halaman utama //
Route::get('/note', [PostController::class, 'index']);

// Create //
// menampilkan halaman form untuk membuat data baru //
Route::get('/note/create', [PostController::class, 'create']);
// menangani proses penyimpanan data baru dari form . Ketika user men-submit form untuk menambahkan data baru //
Route::post('/note', [PostController::class, 'store']);

// Delete //
//  menghapus data tertentu dengan menggunakan ID sebagai parameter //
Route::delete('/note/{id}', [PostController::class, 'destroy']);

// Edit //
// Untuk Mengedit data tertentu //
Route::get('/note/{id}/edit', [PostController::class, 'edit']);
// memperbarui data yang sudah ada pada server //
Route::patch('/note/{id}', [PostController::class, 'update']);
//selengkapnya
Route::get('/note/{id}/show',[PostController::class,'show']);



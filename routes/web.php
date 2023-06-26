<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MahasiswaController::class,'getViewIndex'])->name('get_view_index');
Route::get('/create',[MahasiswaController::class,'getViewCreateMahasiswa'])->name('get_view_create_mahasiswa');
Route::get('/chart',[MahasiswaController::class,'getViewChart'])->name('get_view_chart');
Route::get('/edit/{id}',[MahasiswaController::class,'getViewEditMahasiswa'])->name('get_view_edit_mahasiswa');

Route::post('/create',[MahasiswaController::class,'createMahasiswa'])->name('post_create_mahasiswa');
Route::post('/edit/{id}',[MahasiswaController::class,'postEditMahasiswa'])->name('post_edit_mahasiswa');
Route::delete('/delete/{id}', [ MahasiswaController::class, 'deleteMahasiswa' ])->name('delete_mahasiswa');
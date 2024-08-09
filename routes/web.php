<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiController::class, 'tampil'])->name('pegawai.tampil');

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');

Route::post('pegawai/submit',[PegawaiController::class, 'submit'])->name('pegawai.submit');

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

Route::post('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
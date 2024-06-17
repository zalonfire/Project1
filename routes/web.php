<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController; // Corrected import path

Route::get('/', function () {
    return redirect('mahasiswa');
});

// Route::get('mahasiswa', 'App\Http\Controllers\MahasiswaController@index')->name('mahasiswa.index');
Route::resource('mahasiswa',mahasiswaController::class);

<?php

use App\Http\Controllers\siswacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{nama}/{nama2}', function () {
    return 'haloo';
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('admin', function () {
    return view('template');
});

Route::get('table', function () {
    return view('tabel');
});
Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

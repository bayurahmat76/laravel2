<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/coba',function(){
    return view('coba');
});

Route::get('templete',function(){
    return view('templete');
});

Route::get('tabel',function(){
    return view('tabel');
});
Route::post('users/{id}',function($id){});
Route::put('users/{id}',function($id){});
Route::delete('users/{id}',function($id){});
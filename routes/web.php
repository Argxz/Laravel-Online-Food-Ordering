<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profil');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource(name: 'menu', controller: MenuController::class);
Route::resource(name: 'pelanggan', controller: PelangganController::class);
Route::resource(name:'order', controller: OrderController::class);

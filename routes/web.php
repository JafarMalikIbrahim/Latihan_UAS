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

Route::get('/pegawai', function () {
    $users = \App\Models\User::get();
    return view('pegawai', compact('users'));
});

Route::get('/produksi', function () {
    $produksis = \App\Models\Produksi::get();
    return view('produksi', compact('produksis'));
});

Route::get('/distribusi', function () {
    $distribusis = \App\Models\Distribusi::get();
    return view('distribusi', compact('distribusis'));
});

Route::get('/deliveri', function () {
    $deliveris = \App\Models\Deliveri::get();
    return view('delivery', compact('deliveris'));
});
<?php

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
    return view('auth.logmasuk');
});

Route::get('/permohonan', function () {
    return view('pages.permohonan');
});

Route::get('/alatan', function () {
    return view('pages.alatan');
});

Route::get('/bakul', function () {
    return view('pages.bakul');
});

Route::get('/pembayaran', function () {
    return view('pages.pembayaran');
});

Route::get('/pentadbiran', function () {
    return view('pages.pentadbiran');
});

Route::get('/profil', function () {
    return view('pages.pengurusanprofil');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

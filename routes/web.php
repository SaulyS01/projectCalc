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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/integrales', function () {
    return view('pages.integrales.index');
})->name('integrales.index');

Route::get('/integrales/se-ipp', function () {
    return view('pages.integrales.sesion1.se-ipp');
})->name('integrales.se-ipp');


Route::get('/derivadas', function () {
    return view('pages.derivadas.index');
})->name('derivadas.index');
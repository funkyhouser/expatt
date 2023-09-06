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
    return view('index');
})->name('home');

Route::get('/vivir-en/argentina', function(){
    return view('argentina');
})->name('argentina');

Route::get('/desarrolla-tu-futuro/argentina', function(){
    return view('futuro-argentina');
});

Route::get('/renta-en/argentina', function(){
    return view('renta-argentina');
});
Route::get('/venta-en/argentina', function(){
    return view('venta-argentina');
});

Route::get('/salud/argentina', function(){
    return view('salud-argentina');
});

Route::get('/visado-documentacion/argentina', function(){
    return view('visado-documentacion-argentina');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

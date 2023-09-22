<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/visado-documentacion/argentina', function(){
    return view('visado-documentacion-argentina');
});
Route::get('/informacion-importante/argentina', function(){
    return view('informacion-importante-argentina');
});
Route::get('/mundo-laboral/argentina', function(){
    return view('mundo-laboral-argentina');
});

Route::get('/carnet-de-conducir/argentina', function(){
    return view('carnet-de-conducir-argentina');
});
Route::get('/en-movimiento/argentina', function(){
    return view('en-movimiento-argentina');
});

Route::get('/entretenimiento/argentina', function(){
    return view('entretenimiento-argentina');
});

Route::get('/turismo/argentina', function(){
    return view('turismo-argentina');
});

Route::get('/impuestos-extranjeros/argentina', function(){
    return view('impuestos-extranjeros-argentina');
});

Route::get('/mudarse/argentina', function(){
    return view('mudarse-argentina');
});
Route::get('/vivir/argentina', function(){
    return view('vivir-argentina');
});
Route::get('/finanzas-economia/argentina', function(){
    return view('finanzas-economia-argentina');
});

Route::get('/educacion/argentina', function(){
    return view('educacion-argentina');
});

Route::get('/health-care/argentina', function(){
    return view('health-care-argentina');
});

Route::get('/argentina/los-beneficios-de-ser-un-expatriado-en-argentina', function(){
    return view('los-beneficios-de-ser-un-expatriado-en-argentina-argentina');
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

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/vivir-en/argentina', function(){
    return view('argentina.argentina');
})->name('argentina');

Route::get('/informacion-importante/argentina', function(){
    return view('argentina.informacion-importante');
});
Route::get('/visado-documentacion/argentina', function(){
    return view('argentina.visado-documentacion');
});
Route::get('/impuestos-extranjeros/argentina', function(){
    return view('argentina.impuestos-extranjeros');
});
Route::get('/educacion/argentina', function(){
    return view('argentina.educacion');
});
Route::get('/mundo-laboral/argentina', function(){
    return view('argentina.mundo-laboral');
});
Route::get('/health-care/argentina', function(){
    return view('argentina.health-care');
});
Route::get('/carnet-de-conducir/argentina', function(){
    return view('argentina.carnet-de-conducir');
});
Route::get('/mudanzas/argentina', function(){
    return view('argentina.mudanzas');
});
Route::get('/alojamiento/argentina', function(){
    return view('argentina.alojamiento');
});
Route::get('/turismo/argentina', function(){
    return view('argentina.turismo');
});
Route::get('/entretenimiento/argentina', function(){
    return view('argentina.entretenimiento');
});
Route::get('/en-movimiento/argentina', function(){
    return view('argentina.en-movimiento');
});
Route::get('/asesoria-juridica/argentina', function(){
    return view('argentina.asesoria-juridica');
});
Route::get('/telefonia-internet/argentina', function(){
    return view('argentina.telefonia-internet');
});
Route::get('/bancos/argentina', function(){
    return view('argentina.bancos');
});
Route::get('/transferencia-de-dinero/argentina', function(){
    return view('argentina.transferencia-de-dinero');
});
Route::get('/servicio-domestico/argentina', function(){
    return view('argentina.servicio-domestico');
});
Route::get('/apoyo-psicologico/argentina', function(){
    return view('argentina.apoyo-psicologico');
});
Route::get('/idiomas-intercambio/argentina', function(){
    return view('argentina.idiomas-intercambio');
});
Route::get('/gastronomia/argentina', function(){
    return view('argentina.gastronomia-delivery');
});

Route::get('/vivir-en/mexico', function(){
    return view('mexico.mexico');
})->name('mexico');

Route::get('/informacion-importante/mexico', function(){
    return view('mexico.informacion-importante');
});
Route::get('/visado-documentacion/mexico', function(){
    return view('mexico.visado-documentacion');
});
Route::get('/impuestos-extranjeros/mexico', function(){
    return view('mexico.impuestos-extranjeros');
});
Route::get('/educacion/mexico', function(){
    return view('mexico.educacion');
});
Route::get('/mundo-laboral/mexico', function(){
    return view('mexico.mundo-laboral');
});
Route::get('/health-care/mexico', function(){
    return view('mexico.health-care');
});
Route::get('/carnet-de-conducir/mexico', function(){
    return view('mexico.carnet-de-conducir');
});
Route::get('/mudanzas/mexico', function(){
    return view('mexico.mudanzas');
});
Route::get('/alojamiento/mexico', function(){
    return view('mexico.alojamiento');
});
Route::get('/turismo/mexico', function(){
    return view('mexico.turismo');
});
Route::get('/entretenimiento/mexico', function(){
    return view('mexico.entretenimiento');
});
Route::get('/en-movimiento/mexico', function(){
    return view('mexico.en-movimiento');
});
Route::get('/asesoria-juridica/mexico', function(){
    return view('mexico.asesoria-juridica');
});
Route::get('/telefonia-internet/mexico', function(){
    return view('mexico.telefonia-internet');
});
Route::get('/bancos/mexico', function(){
    return view('mexico.bancos');
});
Route::get('/transferencia-de-dinero/mexico', function(){
    return view('mexico.transferencia-de-dinero');
});
Route::get('/servicio-domestico/mexico', function(){
    return view('mexico.servicio-domestico');
});
Route::get('/apoyo-psicologico/mexico', function(){
    return view('mexico.apoyo-psicologico');
});
Route::get('/idiomas-intercambio/mexico', function(){
    return view('mexico.idiomas-intercambio');
});
Route::get('/gastronomia-delivery/mexico', function(){
    return view('mexico.gastronomia-delivery');
});

Route::get('/argentina/los-beneficios-de-ser-un-expatriado-en-argentina', function(){
    return view('argentina.los-beneficios-de-ser-un-expatriado-en-argentina-argentina');
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
// Route::get('/desarrolla-tu-futuro/argentina', function(){
//     return view('futuro-argentina');
// });

// Route::get('/renta-en/argentina', function(){
//     return view('renta-argentina');
// });
// Route::get('/venta-en/argentina', function(){
//     return view('venta-argentina');
// });
// Route::get('/empresas-que-contratan/argentina', function(){
//     return view('empresas-que-contratan-argentina');
// });
// Route::get('/vivir/argentina', function(){
//     return view('vivir-argentina');
// });
// Route::get('/mudarse/argentina', function(){
//     return view('mudarse-argentina');
// });
// Route::get('/finanzas-economia/argentina', function(){
//     return view('finanzas-economia-argentina');
// });

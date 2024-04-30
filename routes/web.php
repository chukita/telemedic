<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Paciente\Inicio;
use App\Livewire\Paciente\SolicitudMedica;
use App\Livewire\Paciente\ListadoSolicitudMedica;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/
    Route::get('/paciente/inicio',Inicio::class)->name('paciente.inicio');
    Route::get('/paciente/solicitud-medica/{id?}',SolicitudMedica::class)->name('paciente.solicitud-medica');
    Route::get('/paciente/listado-solicitud-medica',ListadoSolicitudMedica::class)->name('paciente.listado-solicitud-medica');

});


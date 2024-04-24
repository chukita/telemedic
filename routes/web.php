<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Paciente\Inicio;
use App\Livewire\Paciente\SolicitudMedica;

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
    Route::get('/paciente/solicitud-medica',SolicitudMedica::class)->name('paciente.solicitud-medica');
});


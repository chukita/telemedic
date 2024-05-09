<?php

namespace App\Livewire;

use Livewire\Component;

class FormularioHistoriaClinica extends Component
{
    public $aparicion;
    public $localizacion;
    public $intensidad;
    public $factores;
    public $frecuencia;
    public $duracion;
    public $evolucion;
   
    
    public function render()
    {
        return view('livewire.formulario-historia-clinica');
    }
}

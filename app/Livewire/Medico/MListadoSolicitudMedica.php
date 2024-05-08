<?php

namespace App\Livewire\Medico;

use Livewire\Component;
use App\Models\SolicitudesMedicas;


class MListadoSolicitudMedica extends Component
{
    public $userId;
    public $solicitudMedica;

    public function mount()
    {
        $this->solicitudMedica=SolicitudesMedicas::get();
    }

    public function render()
    {
        return view('livewire.medico.listado-solicitud-medica');
    }
}

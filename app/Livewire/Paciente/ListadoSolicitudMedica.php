<?php

namespace App\Livewire\Paciente;

use Livewire\Component;
use App\Models\SolicitudesMedicas;

class ListadoSolicitudMedica extends Component
{

    public $userId;
    public $solicitudMedica;

    public function mount()
    {
        $this->userId = auth()->user()->id;
        $this->solicitudMedica=SolicitudesMedicas::where('userId', $this->userId)->get();
    }

 

    public function render()
    {

        return view('livewire.paciente.listado-solicitud-medica');
    }
}

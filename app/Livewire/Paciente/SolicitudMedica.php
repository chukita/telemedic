<?php

namespace App\Livewire\Paciente;

use Livewire\Component;
use App\Models\SolicitudesMedicas;


class SolicitudMedica extends Component
{
    public $solicitud;
    public $descripcion;
    public $userId;
    public $id;
    public $created_at;
    public $estado;

 
    public function mount($id = null)
    {
        $this->id = $id;
        $this->userId = auth()->user()->id;
        if($this->id!=null){
            $solicitud = SolicitudesMedicas::findOrFail($this->id);
     
            $this->descripcion=$solicitud->descripcion;
            $this->created_at=$solicitud->created_at;
            $this->estado=$solicitud->estado;
        }

    }

    public function save(){

        $this->validate([
            'descripcion'=>'required',
            'userId'=>'required'
        ]);
        $this->userId = auth()->user()->id;

        $this->solicitudMedica = new SolicitudesMedicas();
        $this->solicitudMedica->userId = $this->userId;
        $this->solicitudMedica->descripcion = $this->descripcion;
        $this->solicitudMedica->estado = 'Pendiente Revision';
        // Aquí establece los valores para los campos del registro
        $this->solicitudMedica->save();
        try {
            $this->solicitudMedica->save();
            return view('livewire.paciente.listado-solicitud-medica');

        } catch (Exception $e) {
         dd("error");
        }
    }

    public function render()
    {
        return view('livewire.paciente.solicitud-medica');
    }
}

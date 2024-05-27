<?php

namespace App\Livewire\Medico;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\SolicitudesMedicas;


class MSolicitudMedica extends Component
{
    public $solicitud;
    public $descripcion;
    public $userId;
    public $id;
    public $created_at;
    public $estado;
    public $rechazada = false;
    public $aceptada = false;
    public $audioData;

 
    public function mount($id)
    {
        $this->id = $id;
        $this->userId = auth()->user()->id;
        $this->solicitud = SolicitudesMedicas::findOrFail($this->id);

        $this->descripcion=$this->solicitud->descripcion;
        $this->created_at=$this->solicitud->created_at;
        $this->estado=$this->solicitud->estado;
        $this->audioData=$this->solicitud->audio;

    }
    public function enviarFormulario(){
        return view('livewire.medico.solicitud-medica');
    }
    
    public function rechazar(){

        try {
            $this->solicitud->update(['estado' => 'Rechazada']);
            $this->estado='Rechazada';
            $this->rechazada=true;
         

        } catch (Exception $e) {
         dd("error");
        }
    }

    public function aceptar(){

        try {
    
            $this->solicitud->update(['estado' => 'Pendiente Turno']);
            $this->estado='Pendiente Turno';
            $this->aceptada=true;
          
        } catch (Exception $e) {
         dd("error");
        }
    }

    public function render()
    {
        return view('livewire.medico.solicitud-medica', [
            'audioData' => $this->audioData,
        ]);
    }
}

<?php

namespace App\Livewire\Paciente;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\SolicitudesMedicas;


class SolicitudMedica extends Component
{
    public $solicitud;
    #[Rule('required|min:3|max:500')]
    public $descripcion;
    #[Rule('required')]
    public $userId;
    public $id;
    public $created_at;
    public $estado;
    public $guardadoExitoso = false;

 
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

      
        $this->validate();

        $this->userId = auth()->user()->id;

        $this->solicitudMedica = new SolicitudesMedicas();
        $this->solicitudMedica->userId = $this->userId;
        $this->solicitudMedica->descripcion = $this->descripcion;
        $this->solicitudMedica->estado = 'Pendiente Revision';
        // Aquí establece los valores para los campos del registro
        $this->solicitudMedica->save();
        try {
            $this->solicitudMedica->save();
            $this->guardadoExitoso = true;

            return view('livewire.paciente.solicitud-medica');

        } catch (Exception $e) {
         dd("error");
        }
    }

    public function render()
    {
        return view('livewire.paciente.solicitud-medica');
    }
}

<?php

namespace App\Livewire\Paciente;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\SolicitudesMedicas;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


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
    public $audioData;

 
    public function mount($id = null)
    {
        $this->id = $id;
        $this->userId = auth()->user()->id;
        if($this->id!=null){
            $solicitud = SolicitudesMedicas::findOrFail($this->id);
     
            $this->descripcion=$solicitud->descripcion;
            $this->created_at=$solicitud->created_at;
            $this->estado=$solicitud->estado;
            $this->audioData=$solicitud->audio;
        }

    }


    public function save(){

      
        $this->validate();
      
        $this->userId = auth()->user()->id;

        $this->solicitudMedica = new SolicitudesMedicas();
        $this->solicitudMedica->userId = $this->userId;
        $this->solicitudMedica->descripcion = $this->descripcion;
        $this->solicitudMedica->estado = 'Pendiente Revision';

       // Guardar el archivo de audio
    
       if ($this->audioData) {

        $this->validate([
            'audioData' => 'required|max:10240', // Valida el archivo de audio
        ]);
        $fileName = 'recorded_audio_' . time() . '.ogg'; // Puedes usar cualquier formato de archivo de audio compatible

        $audioPath = 'audio/' . $fileName;

        // Guardar el audio grabado en la carpeta "public/audio"
        $audioContent = base64_decode(preg_replace('#^data:audio/(\w+);base64,#i', '', $this->audioData));
        Storage::disk('public')->put($audioPath, $audioContent);
       //dd($audioPath);
        // Guardar la ruta del audio en la base de datos
        $this->solicitudMedica->audio=$audioPath;
    }
        
        
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

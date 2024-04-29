<?php

namespace App\Livewire;
use App\Models\HcAntecedentes;
use Livewire\Component;


class FormularioAntecedentes extends Component
{
    public $antecedentes;

    //CADA ANTECEDENTE
    public $enf_ped;
    public $details_enf_ped;
    public $enf_adu;
    public $details_enf_adu;
    public $enf_ment;
    public $details_enf_ment;
    public $alergias;
    public $details_alergias;
    public $vacunas;
    public $details_vacunas;
    public $operaciones;
    public $details_operaciones;
    public $traumas;
    public $details_traumas;
    public $hosp_prev;
    public $details_hosp_prev;
    public $medicacion;
    public $details_medicacion;
    public $dona_sandre;
    public $details_dona_sangre;
    public $tabaquismo;
    public $details_tabaquismo;
    public $alcoholismo;
    public $details_alcoholismo;
    public $drogas;
    public $details_drogas;
    public $act_fisica;
    public $details_act_fisica;
    public $ult_menstruacion;
    public $embarazos;
    public $details_embarazos;
    public $partos;
    public $details_partos;
    public $abortos;
    public $details_abortos;
    public $enf_padre;
    public $vive_padre;
    public $detail_edad_padre;
    public $edad_padre;
    public $causa_padre;
    public $enf_madre;
    public $vive_madre;
    public $detail_edad_madre;
    public $edad_madre;
    public $causa_madre;
    public $enf_hno1;
    public $vive_hno1;
    public $detail_edad_hno1;
    public $edad_hno1;
    public $causa_hno1;
    public $enf_hno2;
    public $vive_hno2;
    public $detail_edad_hno2;
    public $edad_hno2;
    public $causa_hno2;
    public $userId;


    public function mount(){
        $this->antecedentes = HcAntecedentes::all();

    }

    public function submit(){
        $ant = HcAntecedentes::create([ 
            'enf_ped' => $this->enf_ped,
            'details_enf_ped' => $this->details_enf_ped
        ]);
    }

    public function render()
    {
        return view('livewire.formulario-antecedentes');
    }
}

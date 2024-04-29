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
    public $ultmenstruacion;
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

    public $antEdit = [
            
            'enf_ped' => '',
            'details_enf_ped' => '',
            'enf_adu' => '',
            'details_enf_adu' => '',
            'enf_ment' => '',
            'details_enf_ment' => '',
            'alergias' => '',
            'details_alergias' => '',
            'vacunas' => '',
            'details_vacunas' => '',
            'operaciones' => '',
            'details_operaciones' => '',
            'traumas' => '',
            'details_traumas' => '',
            'hosp_prev' => '',
            'details_hosp_prev' => '',
            'medicacion' => '',
            'details_medicacion' => '',
            'dona_sandre' =>'',
            'details_dona_sangre' => '',
            'tabaquismo' => '',
            'details_tabaquismo' => '',
            'alcoholismo' => '',
            'details_alcoholismo' => '',
            'drogas' => '',
            'details_drogas' => '',
            'act_fisica' => '',
            'details_act_fisica' => '',
            'ultmenstruacion' => '',
            'embarazos' => '',
            'details_embarazos' => '',
            'partos' => '',
            'details_partos' => '',
            'abortos' => '',
            'details_abortos' => '',
            'enf_padre' => '',
            'vive_padre' => '',
            'detail_edad_padre' => '',
            'edad_padre' => '',
            'causa_padre' => '',
            'enf_madre' => '',
            'vive_madre' => '',
            'detail_edad_madre' => '',
            'edad_madre' => '',
            'causa_madre' => '',
            'enf_hno1' => '',
            'vive_hno1' => '',
            'detail_edad_hno1' => '',
            'edad_hno1' => '',
            'causa_hno1' => '',
            'enf_hno2' => '',
            'vive_hno2' => '',
            'detail_edad_hno2' => '',
            'edad_hno2' => '',
            'causa_hno2' => ''
    ];


    public function mount(){

        $this->userId = auth()->user()->id;
        $this->edit($this->userId);

    }

    public function edit($userId){
        $ant = HcAntecedentes::where('userId', $userId)->first();
        //dd($ant->enf_padre);
        $this->antEdit = [
            'enf_ped' => (bool) $ant->enf_ped,
            'details_enf_ped' => $ant->details_enf_ped,
            'enf_adu' => (bool) $ant->enf_adu,
            'details_enf_adu' => $ant->details_enf_adu,
            'enf_ment' => (bool) $ant->enf_ment,
            'details_enf_ment' => $ant->details_enf_ment,
            'alergias' => (bool) $ant->alergias,
            'details_alergias' => $ant->details_alergias,
            'vacunas' => (bool) $ant->vacunas,
            'details_vacunas' => $ant->details_vacunas,
            'operaciones' => (bool) $ant->operaciones,
            'details_operaciones' => $ant->details_operaciones,
            'traumas' => (bool) $ant->traumas,
            'details_traumas' => $ant->details_traumas,
            'hosp_prev' => (bool) $ant->hosp_prev,
            'details_hosp_prev' => $ant->details_hosp_prev,
            'medicacion' => (bool) $ant->medicacion,
            'details_medicacion' => $ant->details_medicacion,
            'dona_sandre' => (bool) $ant->dona_sandre,
            'details_dona_sandre' => $ant->details_dona_sandre,
            'tabaquismo' => (bool) $ant->tabaquismo,
            'details_tabaquismo' => $ant->details_tabaquismo,
            'alcoholismo' => (bool) $ant->alcoholismo,
            'details_alcoholismo' => $ant->details_alcoholismo,
            'drogas' => (bool) $ant->drogas,
            'details_drogas' => $ant->details_drogas,
            'act_fisica' => (bool) $ant->act_fisica,
            'details_act_fisica' => $ant->details_act_fisica,
            'ultmenstruacion' => (bool)$ant->ult_menstruacion,
            'embarazos' => (bool) $ant->embarazos,
            'details_embarazos' => $ant->details_embarazos,
            'partos' => (bool) $ant->partos,
            'details_partos' => $ant->details_partos,
            'abortos' => (bool) $ant->abortos,
            'details_abortos' => $ant->details_abortos,
            'enf_padre' => (bool) $ant->enf_padre,
            'vive_padre' => (bool) $ant->vive_padre,
            'detail_edad_padre' => $ant->detail_edad_padre,
            'edad_padre' => $ant->edad_padre,
            'causa_padre' => $ant->causa_padre,
            'enf_madre' => (bool) $ant->enf_madre,
            'vive_madre' => (bool) $ant->vive_madre,
            'detail_edad_madre' => $ant->detail_edad_madre,
            'edad_madre' => $ant->edad_madre,
            'causa_madre' => $ant->causa_madre,
            'enf_hno1' => (bool) $ant->enf_hno1,
            'vive_hno1' => (bool) $ant->vive_hno1,
            'detail_edad_hno1' => $ant->detail_edad_hno1,
            'edad_hno1' => $ant->edad_hno1,
            'causa_hno1' => $ant->causa_hno1,
            'enf_hno2' => (bool) $ant->enf_hno2,
            'vive_hno2' => (bool) $ant->vive_hno2,
            'detail_edad_hno2' => $ant->detail_edad_hno2,
            'edad_hno2' => $ant->edad_hno2,
            'causa_hno2' => $ant->causa_hno2,
        ];

    }

    public function update(){

        //dd($this->antEdit);

        $ant = HcAntecedentes::where('userId', $this->userId )->first();

        $ant->update([ 
            'enf_ped' => (bool)$this->antEdit['enf_ped'],
            'details_enf_ped' => $this->antEdit['details_enf_ped'],
            'enf_adu' => (bool)$this->antEdit['enf_adu'],
            'details_enf_adu' => $this->antEdit['details_enf_adu'],
            'enf_ment' => (bool)$this->antEdit['enf_ment'],
            'details_enf_ment' => $this->antEdit['details_enf_ment'],
            'alergias' => (bool)$this->antEdit['alergias'],
            'details_alergias' => $this->antEdit['details_alergias'],
            'vacunas' => (bool)$this->antEdit['vacunas'],
            'details_vacunas' => $this->antEdit['details_vacunas'],
            'operaciones' => (bool)$this->antEdit['operaciones'],
            'details_operaciones' => $this->antEdit['details_operaciones'],
            'traumas' => (bool)$this->antEdit['traumas'],
            'details_traumas' => $this->antEdit['details_traumas'],
            'hosp_prev' => (bool)$this->antEdit['hosp_prev'],
            'details_hosp_prev' => $this->antEdit['details_hosp_prev'],
            'medicacion' => (bool)$this->antEdit['medicacion'],
            'details_medicacion' => $this->antEdit['details_medicacion'],
            'dona_sandre' => (bool)$this->antEdit['dona_sandre'],
            'details_dona_sandre' => $this->antEdit['details_dona_sandre'],
            'tabaquismo' => (bool)$this->antEdit['tabaquismo'],
            'details_tabaquismo' => $this->antEdit['details_tabaquismo'],
            'alcoholismo' => (bool)$this->antEdit['alcoholismo'],
            'details_alcoholismo' => $this->antEdit['details_alcoholismo'],
            'drogas' => (bool)$this->antEdit['drogas'],
            'details_drogas' => $this->antEdit['details_drogas'],
            'act_fisica' => (bool)$this->antEdit['act_fisica'],
            'details_act_fisica' => $this->antEdit['details_act_fisica'],
            'ult_menstruacion' => (bool)$this->antEdit['ultmenstruacion'],
            'embarazos' => (bool)$this->antEdit['embarazos'],
            'details_embarazos' => $this->antEdit['details_embarazos'],
            'partos' => (bool)$this->antEdit['partos'],
            'details_partos' => $this->antEdit['details_partos'],
            'abortos' => (bool)$this->antEdit['abortos'],
            'details_abortos' => $this->antEdit['details_abortos'],
            'enf_padre' => (bool)$this->antEdit['enf_padre'],
            'vive_padre' => (bool)$this->antEdit['vive_padre'],
            'detail_edad_padre' => $this->antEdit['detail_edad_padre'],
            'edad_padre' => $this->antEdit['edad_padre'],
            'causa_padre' => $this->antEdit['causa_padre'],
            'enf_madre' => (bool)$this->antEdit['enf_madre'],
            'vive_madre' => (bool)$this->antEdit['vive_madre'],
            'detail_edad_madre' => $this->antEdit['detail_edad_madre'],
            'edad_madre' => $this->antEdit['edad_madre'],
            'causa_madre' => $this->antEdit['causa_madre'],
            'enf_hno1' => (bool)$this->antEdit['enf_hno1'],
            'vive_hno1' => (bool)$this->antEdit['vive_hno1'],
            'detail_edad_hno1' => $this->antEdit['detail_edad_hno1'],
            'edad_hno1' => $this->antEdit['edad_hno1'],
            'causa_hno1' => $this->antEdit['causa_hno1'],
            'enf_hno2' => (bool)$this->antEdit['enf_hno2'],
            'vive_hno2' => (bool)$this->antEdit['vive_hno2'],
            'detail_edad_hno2' => $this->antEdit['detail_edad_hno2'],
            'edad_hno2' => $this->antEdit['edad_hno2'],
            'causa_hno2' => $this->antEdit['causa_hno2']
            
        ]);
    }


    public function render()
    {
        
        return view('livewire.formulario-antecedentes');
    }
}

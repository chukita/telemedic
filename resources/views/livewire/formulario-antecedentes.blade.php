<div>
<x-breadcrumb :segments="[
    ['name' => 'Inicio', 'url' => route('paciente.inicio')],
    ['name' => 'Solicitudes', 'url' => route('paciente.listado-solicitud-medica')],
    ['name' => 'Antecedentes', 'url' => route('paciente.solicitud-medica')],
  
  ]" />
  <div class="section-title mt-4">
          <h2>ANTECEDENTES</h2>
          <p>Cargue o actualice sus antecedentes</p>
        </div>

<div >

<form wire:submit="update">
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="flex gap-8">
        <!-- Columna 1 -->
        <div class="flex-1">

        <div class=" bg-white shadow rounded-lg p-6">

        <h6 class="font-semibold text-gray-400 leading-tight">
           Antecedentes Personales
        </h6>
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
        ['enf_ped', 'Enfermedades Pediátricas'],
        ['enf_adu', 'Enfermedades en la Adultez'],
        ['enf_ment', 'Enfermedades Mentales'],
        ['alergias', 'Alergias'],
        ['vacunas', 'Vacunas'],
        ['operaciones', 'Operaciones'],
        ['traumas', 'Traumas'],
        ['hosp_prev', 'Hospitalizaciones Previas'],
        ['medicacion', 'Medicación'],
        ['dona_sandre', 'Donante de Sangre'],
       
        
    ] as [$variable, $label])
    <div class="mb-4">
        
        <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center ">
                <label class="pr-4 block text-sm font-medium text-gray-700 mb-1 ">
                {{ $label }} : 
                </label>
           
                <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable }}" value="true">
                <label for="{{ $variable }}" class="ml-2 block text-sm text-gray-900 space-x-4">
                    Sí
                </label>
                <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable }}" value="false">
                <label for="{{ $variable }}" class="ml-2 block text-sm text-gray-900">
                    No
                </label>
          
            </div>
        </div>
        <input type="text" wire:model="antEdit.details_{{ $variable }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label) }}">
    </div>
    @endforeach
</div>
</div>
</div>

        <!-- Columna 2 -->
        <div class="flex-1">
        <div class="mx-auto px-4">
        <div class=" bg-white shadow rounded-lg p-6">

        <h6 class="font-semibold text-gray-400 leading-tight">
           Hábitos
        </h6>
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
        ['tabaquismo', 'Tabaquismo'],
        ['alcoholismo', 'Alcoholismo'],
        ['drogas', 'Drogas'],
        ['act_fisica', 'Actividad Física'],
       
    ] as [$variable2, $label2])
    <div class="mb-4">
        
    <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center ">
                <label class="pr-4 block text-sm font-medium text-gray-700 mb-1 ">
                {{ $label2 }} : 
                </label>
           
                <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable2 }}" value="true">
                <label for="{{ $variable2 }}" class="ml-2 block text-sm text-gray-900 space-x-4">
                    Sí
                </label>
                <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable2 }}" value="false">
                <label for="{{ $variable2 }}" class="ml-2 block text-sm text-gray-900">
                    No
                </label>
          
            </div>
        </div>
        <input type="text" wire:model="antEdit.details_{{ $variable2 }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label2) }}">
    </div>
    @endforeach
</div>
    </div>
    </div>

    <div class="mx-auto px-4 mt-4">
        <div class=" bg-white shadow rounded-lg p-6">

        <h6 class="font-semibold text-gray-400 leading-tight">
           Historia Gineco-Obstétrica
        </h6>
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
       
        ['ult_menstruacion', 'Última Menstruación'],
        ['embarazos', 'Embarazos'],
        ['partos', 'Partos'],
        ['abortos', 'Abortos'],
       
    ] as [$variable3, $label3])
    <div class="mb-4">
        
        <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center space-x-4">
            <label class="block text-sm font-medium text-gray-700 mb-1 ">
            {{ $label3 }} : 
        </label>
        <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable3 }}" value="true" >
                <label for="antEdit.{{ $variable3 }}" class="ml-2 block text-sm text-gray-900">
                    Sí
                </label>
                <input type="radio" class="form-radio ml-4" wire:model="antEdit.{{ $variable3 }}" value="false" >
                <label for="antEdit.{{ $variable3 }}" class="ml-2 block text-sm text-gray-900">
                    No
                </label>
                
            </div>
        </div>
        <input type="text" wire:model="antEdit.details_{{ $variable3 }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label3) }}">
    </div>
    @endforeach
</div>
    </div>
    </div>
</div>
    </div>

    <div class="flex mt-4">
    <div class="flex-1">
        <div class=" bg-white shadow rounded-lg p-6">

        <h6 class="font-semibold text-gray-400 leading-tight">
           Historia Familiar
        </h6>
        <div class="max-w mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
       
       
        ['padre', 'Sobre el Padre'],
        ['madre', 'Sobre la Madre'],
        ['hno1', 'Sobre Hermano/a 1'],
        ['hno2', 'Sobre Hermano/a 2'],
        
    ] as [$variable4, $label4])
    
    <div class="mb-4">
    <label class="text-sm font-semibold text-gray-400 leading-tight">
        {{ $label4 }} : 
    </label>
    <div class="flex items-center flex-wrap">
    
    <label class="text-sm font-medium text-gray-700 mx-4 mr-2">
        Edad: 
    </label>
   
    <input type="text" wire:model="antEdit.edad_{{ $variable4 }}" class="w-20 mr-2 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Edad">
    <label class="text-sm font-medium text-gray-700 mr-2">
        Enfermedades : 
    </label>
    <input type="radio" class="form-radio mx-2 mr-2" wire:model="antEdit.enf_{{ $variable4 }}" value="true" >
    <label for="antEdit.enf_{{ $variable4 }}" class="mr-2 text-sm text-gray-900">
        Sí
    </label>
    <input type="radio" class="form-radio mx-2 mr-2" wire:model="antEdit.enf_{{ $variable4 }}" value="false" >
    <label for="antEdit.enf_{{ $variable4 }}" class="mr-2 text-sm text-gray-900">
        No
    </label>
    <input type="text" wire:model="antEdit.detail_edad_{{ $variable4 }}" class="mr-2 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles">
    <label class="mr-2 text-sm font-medium text-gray-700">
        Vive? : 
    </label>
    <input type="radio" class="mr-2 form-radio mx-2" wire:model="antEdit.vive_{{ $variable4 }}" value="true" id="antEdit.{{ $variable4 }}">
    <label for="antEdit.vive_{{ $variable4 }}" class="mr-2 text-sm text-gray-900">
        Sí
    </label>
    <input type="radio" class="mr-2 form-radio mx-2" wire:model="antEdit.vive_{{ $variable4 }}" value="false" id="antEdit.{{ $variable4 }}">
    <label for="antEdit.vive_{{ $variable4 }}" class="text-sm text-gray-900">
        No
    </label>
    <label class="ml-4 mr-2 text-sm font-medium text-gray-700">
        Causa de muerte : 
    </label>
    <input type="text" wire:model="antEdit.causa_{{ $variable4 }}" class="mr-2 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Causa de muerte">
</div>
        
    </div>

    @endforeach
</div>
    </div>
    </div>
    </div>

    @if($guardadoExitoso)
            <div class="alert alert-success mt-4">
                Los datos se guardaron correctamente.
            </div>
        @endif

    <div class="flex justify-end">
        <x-button type="submit" class="dark mt-4">Guardar Antecedentes</x-button>
    </div>

</form>



</div>
</div>

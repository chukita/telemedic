<div>
<div class="shadow p-6">

<form wire:submit="submit">
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="flex gap-8">
        <!-- Columna 1 -->
        <div class="flex-1">
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
        ['enf_ped', 'Enfermedades Pediátricas'],
        ['enf_adu', 'Enfermedades Adultos'],
        ['enf_ment', 'Enfermedades Mentales'],
        ['alergias', 'Alergias'],
        ['vacunas', 'Vacunas'],
        ['operaciones', 'Operaciones'],
        ['traumas', 'Traumas'],
        ['hosp_prev', 'Hospitalizaciones Previas'],
        ['medicacion', 'Medicación'],
        ['dona_sandre', 'Donante de Sangre'],
        ['tabaquismo', 'Tabaquismo'],
        ['alcoholismo', 'Alcoholismo'],
        ['drogas', 'Drogas'],
        ['act_fisica', 'Actividad Física'],
        
    ] as [$variable, $label])
    <div class="mb-4">
        
        <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center space-x-4">
            <label class="block text-sm font-medium text-gray-700 mb-1 ">
            {{ $label }} : 
        </label>
                <input type="radio" class="form-radio" wire:model="{{ $variable }}" value="true" id="{{ $variable }}">
                <label for="{{ $variable }}" class="ml-2 block text-sm text-gray-900">
                    Sí
                </label>
                <input type="radio" class="form-radio" wire:model="{{ $variable }}" value="false" id="{{ $variable }}">
                <label for="{{ $variable }}" class="ml-2 block text-sm text-gray-900">
                    No
                </label>
            </div>
        </div>
        <input type="text" wire:model="details_{{ $variable }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label) }}">
    </div>
    @endforeach
</div>
</div>

        <!-- Columna 2 -->
        <div class="flex-1">
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
        
        ['ult_menstruacion', 'Última Menstruación'],
        ['embarazos', 'Embarazos'],
        ['partos', 'Partos'],
        ['abortos', 'Abortos'],
        ['enf_padre', 'Enfermedades del Padre'],
        ['vive_padre', 'Vive Padre'],
        ['detail_edad_padre', 'Detalle Edad Padre'],
        ['edad_padre', 'Edad Padre'],
        ['causa_padre', 'Causa Muerte Padre'],
        ['enf_madre', 'Enfermedades de la Madre'],
        ['vive_madre', 'Vive Madre'],
        ['detail_edad_madre', 'Detalle Edad Madre'],
        ['edad_madre', 'Edad Madre'],
        ['causa_madre', 'Causa Muerte Madre'],
        ['enf_hno1', 'Enfermedades Hermano 1'],
        ['vive_hno1', 'Vive Hermano 1'],
        ['detail_edad_hno1', 'Detalle Edad Hermano 1'],
        ['edad_hno1', 'Edad Hermano 1'],
        ['causa_hno1', 'Causa Muerte Hermano 1'],
        ['enf_hno2', 'Enfermedades Hermano 2'],
        ['vive_hno2', 'Vive Hermano 2'],
        ['detail_edad_hno2', 'Detalle Edad Hermano 2'],
        ['edad_hno2', 'Edad Hermano 2'],
        ['causa_hno2', 'Causa Muerte Hermano 2'],
        ['userId', 'ID de Usuario']
    ] as [$variable2, $label2])
    <div class="mb-4">
        
        <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center space-x-4">
            <label class="block text-sm font-medium text-gray-700 mb-1 ">
            {{ $label2 }} : 
        </label>
        <input type="radio" class="form-radio" wire:model="{{ $variable2 }}" value="true" id="{{ $variable2 }}">
                <label for="{{ $variable2 }}" class="ml-2 block text-sm text-gray-900">
                    Sí
                </label>
                <input type="radio" class="form-radio" wire:model="{{ $variable2 }}" value="false" id="{{ $variable2 }}">
                <label for="{{ $variable2 }}" class="ml-2 block text-sm text-gray-900">
                    No
                </label>
                
            </div>
        </div>
        <input type="text" wire:model="details_{{ $variable2 }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label2) }}">
    </div>
    @endforeach
</div>
    </div>
</div>

    <div class="flex justify-end">
        <button type="submit" class="dark">Guardar Antecedentes</button>
    </div>

</form>



</div>
</div>

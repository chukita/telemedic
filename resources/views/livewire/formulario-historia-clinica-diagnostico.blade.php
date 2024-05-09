<div>
<h6 class="font-semibold leading-tight px-4 ">
          Enfermedad Actual : Diagnostico y Tratamiento
        </h6>
<div >

<form wire:submit="update">
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="flex gap-8">
        <!-- Columna 1 -->
       <!-- Columna 1 -->
       <div class="flex-1">

<div class=" bg-white shadow rounded-lg p-6">

<div class="max-w-4xl mx-auto px-4 py-8">
<!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
@foreach([
['aparicion', 'Aparición (fecha y forma)'],
['localizacion', 'Localizacion e irradiaciòn del dolor'],
['intensidad', 'Intensidad (ligera,moderada,severa)'],
['factores', 'Factores que se relacionan con el aumento o alivio del dolor'],
['frecuencia', 'Frecuencia (periodisidad,ritmo,horario)'],
['duracion', 'Duración en el tiempo'],
['evolucion', 'Evolución y sìntomas acompañantes o asociados (síntomas que poseen intima o simultanea presencia)']


] as [$variable, $label])
<div class="mb-4">

<div class="flex items-center gap-4 mb-4">
    <div class="flex items-center ">
        <label class="pr-4 block text-sm font-medium text-gray-700 mb-1 ">
        {{ $label }} : 
        </label>

    </div>
</div>
<input type="text" wire:model="antEdit.details_{{ $variable }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Completar {{ strtolower($label) }}">
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
          
        </h6>
        <div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Vamos a repetir un bloque similar para cada conjunto de variables -->
    @foreach([
        ['diagnostico', 'Diagnostico'],
        ['tratamiento', 'Tratamiento'],
      
       
    ] as [$variable2, $label2])
    <div class="mb-4">
        
    <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center ">
                <label class="pr-4 block text-sm font-medium text-gray-700 mb-1 ">
                {{ $label2 }} : 
                </label>
           
               
          
            </div>
        </div>
        <textarea wire:model="antEdit.details_{{ $variable2 }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Detalles de {{ strtolower($label2) }}"></textarea>
    </div>
    @endforeach

    <div class="flex justify-end">
        <x-button type="submit" class="dark mt-4">Guardar</x-button>
    </div>
</div>
    </div>
    </div>

    
</div>
</div>

    

    

</form>



</div>
</div>

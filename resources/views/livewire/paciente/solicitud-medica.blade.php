<div>
  <x-breadcrumb :segments="[
    ['name' => 'Inicio', 'url' => route('paciente.inicio')],
    ['name' => 'Listado', 'url' => route('paciente.listado-solicitud-medica')],
    ['name' => 'Solicitud', 'url' => route('paciente.solicitud-medica')],
  
  ]" />
    <!-- En tu vista de productos (productos.blade.php) -->
       <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Solicitud de Consulta Médica</h2>
          <p>Realice una solicitud de consulta médica ingresando los datos del motivo de la consulta.</p>
        </div>

        <form wire:submit="save">
            <div class="card-body">
            <div class="form-group">
            <x-label>Paciente</x-label>
            <x-input wire:model="userId" class="w-full"  placeholder=" {{ Auth::user()->name }}" disabled/>
            <x-input-error for="userId"/>
            </div>
         
            <div class="form-group">
            <x-label  >Descripción de la consulta a realizar</x-label>
            @if($id)
                <x-textarea wire:model="descripcion" class="w-full" disabled></x-textarea>
            @else
                <x-textarea wire:model="descripcion" class="w-full"></x-textarea>
            @endif
            <x-input-error for="descripcion"/>
            </div>
            @if($id)
            <div class="form-group">
              <x-label>Fecha de creación</x-label>
              <x-input wire:model="created_at" class="w-full"  placeholder=" {{ Auth::user()->name }}" disabled/>
              
              </div>
              <div class="form-group">
                <x-label>Estado</x-label>
                <x-input wire:model="estado" class="w-full"  disabled/>
                </div>
                @endif
            <div class="flex justify-end">
              @if (!$id)
              <x-button>Guardar</x-button>
                
              @endif
           
                  </div>

                  </div>
                  </div>

                  </div>
        </form>

      </div>

</div>

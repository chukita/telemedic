<div>
    <x-breadcrumb :segments="[
      ['name' => 'Inicio', 'url' => route('medico.inicio')],
      ['name' => 'Listado', 'url' => route('medico.listado-solicitud-medica')],
      ['name' => 'Solicitud', 'url' => route('medico.solicitud-medica')],
    
    ]" />
      <!-- En tu vista de productos (productos.blade.php) -->
         <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Solicitud de Consulta Médica </h2>
            <p>Realice una solicitud de consulta médica ingresando los datos del motivo de la consulta.</p>
          </div>
  
          @if($rechazada)
              <div class="alert alert-danger">
                  La Solicitud ha sido rechazada con exito.
              </div>
          @endif

          @if($aceptada)
              <div class="alert alert-success">
                La Solicitud ha sido aceptada.
              </div>
          @endif
          <div class="flex justify-end">
            <x-button>Ver Historia Clinica</x-button>
          </div>
          <form wire:submit.prevent="enviarFormulario">
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
             
              @endif
                       
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
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    @if($estado=='Pendiente Revision')
                    <button type="submit" wire:click="rechazar" wire:loading.attr="disabled" class="btn btn-danger me-md-2"><i class="fas fa-times"></i> Rechazar</button>
                    <button type="submit" wire:click="aceptar" wire:loading.attr="disabled" class="btn btn-success"><i class="fas fa-check"></i> Aceptar</button>
         
               @endif
                  </div>
                
                 
                    </div>
                    </div>
  
                    </div>
          </form>
  
        </div>
  
  </div>
  
  
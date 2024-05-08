
<div> <x-breadcrumb :segments="[
    ['name' => 'Inicio', 'url' => route('paciente.inicio')],
    ['name' => 'Solicitud', 'url' => route('paciente.solicitud-medica')],
  
  ]" />

            <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Solicitudes de Consulta Médica</h2>
                  <p>Listado de Solicitudes de consultas médicas.</p>
                </div>
                <div class="flex justify-end">
                <x-button><a style="color:white;" href="{{ route('paciente.solicitud-medica') }}">Crear Nueva</a>
</x-button></div>
<br/>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th scope="col">Nro Solicitud</th>
                          <th scope="col">Fecha</th>
                          
                          <th scope="col">Estado </th>
                          <th scope="col">Acciones </th>
                        </tr>
                    </thead>
                    @foreach ($solicitudMedica as $solicitud)
                    <tr>
                    <td>
                        {{$solicitud->id}}
                        </td>
                        <td>
                            {{$solicitud->created_at}}
                            </td>
                      
                    <td>
                        {{$solicitud->estado}}
                    </td> 
                    <td>
                        <x-button><a style="color:white;" href="{{ route('paciente.solicitud-medica', ['id' => $solicitud->id]) }}">Ver</a></x-button>
                    </td> 
                </tr>  
                    @endforeach
                </table>
            </div>
   
    </div>
    
        
</div>

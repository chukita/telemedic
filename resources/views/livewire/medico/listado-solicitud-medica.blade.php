
<div> <x-breadcrumb :segments="[
    ['name' => 'Inicio', 'url' => route('medico.inicio')],
  
  ]" />

            <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Solicitudes de Consultas Médicas</h2>
                  <p>Listado de Solicitudes de consultas médicas.</p>
                </div>
              

                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th scope="col">Nro Solicitud</th>
                                              <th scope="col">Dni Paciente</th>
                          <th scope="col">Nombre Paciente</th>
                          <th scope="col">Fecha </th>
                          <th scope="col">Estado </th>
                          <th scope="col">Solicitud </th>
                        </tr>
                    </thead>
                    @foreach ($solicitudMedica as $solicitud)
                    <tr>
                    <td>
                        {{$solicitud->id}}
                        </td>
                        <td>
                           DNI
                            </td>
                            <td>
                               Nombre
                            </td> 
                            <td>
                            {{$solicitud->created_at}}
                        </td> 
                    <td>
                        {{$solicitud->estado}}
                    </td> 
                    <td>
                        <x-button><a style="color:white;" href="{{ route('medico.solicitud-medica', ['id' => $solicitud->id]) }}">Ver</a></x-button>
                    </td> 
                </tr>  
                    @endforeach
                </table>
            </div>
   
    </div>
    
        
</div>

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

        @if($guardadoExitoso)
            <div class="alert alert-success">
                Los datos se guardaron correctamente.
            </div>
        @endif

        <form wire:submit="save" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group">
            <x-label>Paciente</x-label>
            <x-input wire:model="userId" class="w-full"  placeholder=" {{ Auth::user()->name }}" disabled/>
            <x-input-error for="userId"/>
            </div>
         
            <div class="form-group">
            <x-label>Descripción de la consulta a realizar</x-label>
            @if($id)
                <x-textarea wire:model="descripcion" class="w-full" disabled></x-textarea>
            @else
                <x-textarea wire:model.live="descripcion" id="descripcion" class="w-full"  maxlength="500"></x-textarea>
            @endif
                       <x-input-error for="descripcion"/>
            </div>

            <div class="form-group">
              <x-label>Archivo de audio</x-label>
             
              @if($id && $audioData)
              <div x-data x-init="$nextTick(() => {
                
                let audioElement = document.getElementById('myAudio');
                if (audioElement) {
                    audioElement.addEventListener('play', function() {
                        console.log('Audio is playing');
                    });
                } else {
                    console.error('El elemento de audio no se encontró');
                }
            })">
              <audio id="myAudio" controls>
           
                <source src="{{ asset('storage/' . $audioData) }}" type="audio/ogg">
                Tu navegador no soporta el elemento de audio.
            </audio> 
              </div>
              @else
              <audio id="audio-preview" controls></audio>
              <input type="hidden" wire:model="audioData" id="audioData">
             
              <button type="button" id="start-recording">Iniciar grabación</button>
              <button type="button" id="stop-recording" style="display: none;">Detener grabación</button>
              @error('audioData') <span class="error">{{ $message }}</span> @enderror
              
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
                <div class="flex justify-end">
                  @if (!$id )
                  @if(!$guardadoExitoso)

                  <x-button>Guardar</x-button>
                  @endif
                  @endif
           
                  </div>

                  </div>
                  </div>

                  </div>
        </form>

      </div>

</div>
<script>
 document.addEventListener('DOMContentLoaded', function () {
  const startRecordingButton = document.getElementById('start-recording');
  const stopRecordingButton = document.getElementById('stop-recording');
  const audioPreview = document.getElementById('audio-preview');
  const audioDataInput = document.getElementById('audioData');
  let mediaRecorder;
  let audioChunks = [];

  startRecordingButton.addEventListener('click', startRecording);
  stopRecordingButton.addEventListener('click', stopRecording);

  function startRecording() {
      navigator.mediaDevices.getUserMedia({ audio: true })
          .then(stream => {
              mediaRecorder = new MediaRecorder(stream);
              mediaRecorder.ondataavailable = event => {
                  audioChunks.push(event.data);
              };
              mediaRecorder.onstop = () => {
                  const audioBlob = new Blob(audioChunks, { type: 'audio/ogg; codecs=opus' });
                  const audioURL = URL.createObjectURL(audioBlob);
                  audioPreview.src = audioURL;

                  const reader = new FileReader();
                  reader.readAsDataURL(audioBlob);
                  reader.onloadend = () => {
                      const base64Data = reader.result;
                      audioDataInput.value = base64Data;
                      @this.set('audioData', base64Data);  // Asegúrate de que el valor se establece en Livewire
                  };

                  stopRecordingButton.style.display = 'none';
                  startRecordingButton.style.display = 'inline-block';
              };
              mediaRecorder.start();
              startRecordingButton.style.display = 'none';
              stopRecordingButton.style.display = 'inline-block';
          })
          .catch(error => {
              console.error('Error al acceder al dispositivo de audio:', error);
          });
  }

  function stopRecording() {
      mediaRecorder.stop();
  }
});
</script>
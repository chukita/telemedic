<div>
<section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Solicitud de Consulta Médica</h2>
          <p>Realice una solicitud de consulta médica ingresando los datos del motivo de la consulta.</p>
        </div>

        <form >
<div class="card-body">
<div class="form-group">
<label for="paciente">Paciente</label>
<input type="paciente" class="form-control" id="paciente" placeholder=" {{ Auth::user()->name }}" disabled>
</div>
<div class="form-group">
<label for="paciente">Descripción de la consulta a realizar</label>
<textarea class="form-control" rows="3" placeholder=""></textarea>
</div>
<div class="form-group">
<label for="exampleInputFile">Adjuntar archivo</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="customFile">
<label class="custom-file-label" for="customFile">Adjuntar archivo</label>
</div>

</div>
</div>

</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
</div>
</form>

      </div>
    </section><!-- End Appointment Section -->
</div>

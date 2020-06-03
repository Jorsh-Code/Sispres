<div class="containerF">
    <form method="POST" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
    <h1>Gracias por registrarte en Sispres</h1>
        <hr>
        <hr>
        <h3>Para continuar necesitamos verificar que eres alumno de ESCOM, por favor ingresa
            la información que se te pide.
        </h3>
        <hr>
        <hr style="margin-bottom: 15px;">
        {{ csrf_field() }}
        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
        <label for="boleta">Boleta:</label>
        <input type="text" name="boleta" id="boleta" required>
        <label for="telephone">Teléfono:</label>
        <input type="text" name="telephone" id="telephone" required>
        <input type="hidden" value="NoVERIFIED" name="status">
        <label for="comp-horario">Comprobante de horario:</label>
        <input type="file" name="img1" id="comp-horario" class="input-file" required>
        <label for="credencial">Credencial:</label>
        <input type="file" name="img2" id="credencial" class="input-file" required>
        <button type="submit" class="btn-s">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Continuar
        </button>
    </form>
</div>
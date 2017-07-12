
<form action="{{ url('contacto') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
    <input type="hidden" name="user_email" value="{{ Auth::user()->email }}">
<div id="contacto_user">
    <div class="container well">
        <div class="col-sm-12 placeholder" id="contacto-user">
            <h3>Formulario de contacto</h3>
            <h4>Mándanos cualquier consulta y te responderemos por e-mail lo antes posible</h4>
            <div class="row">
                <span class="text-muted">Nombre: {{ Auth::user()->name }}</span>
            </div>
            <div class="row">
                <span class="text-muted">E-mail: {{ Auth::user()->email }}</span>
            </div>
            <div class="well">
                <textarea name="pregunta" id="pregunta" required
                          placeholder="Introduce tu consulta ... (max: 255 caracteres)"
                          cols="50" rows="6" maxlength="250"></textarea>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-info">Mandar</button>
            </div>
        </div>
    </div>
</div>
</form>
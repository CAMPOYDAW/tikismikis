<?php
$message=Session::get('message');
?>
@if($message)
    <script>
        alert('{{$message}}');
    </script>
@endif
<script>var id_im=''</script>
<h1 class="page-header">Contacto</h1>
<div id="admin-contacto" class="row placeholder">
    <div class="col-lg-4">
        <h4 style="text-align:center">Consultas de contacto sin responder</h4>
        @if(count(session()->get('contacts_sin'))>0)
            @foreach(session()->get('contacts_sin') as $cs)
                @php($pregunta=$cs->pregunta)
                <div class="well pregunta" data-pregunta="{{ $pregunta }}" data-id="{{ $cs->id }}">
                    <table style="text-align: left">
                        <tr style="text-align: left">
                            <td><span class="text-muted">Nombre:</span></td>
                            <td><span class="text-muted"><b>{{ $cs->user_name }}</b></span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">E-mail:</span></td>
                            <td><span class="text-muted"><b>{{ $cs->user_email }}</b></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <p class="text-right"><span >{{ $cs->created_at }}</span></p>
                </div>
            @endforeach
        @else
            <div class="well">
                <span class="text-muted">No tiene consultas de contactos por responder</span>
            </div>
        @endif
    </div>
    @if(count(session()->get('contacts_sin'))>0)
    <div class="col-lg-4">
        <h4 style="text-align:center">Pregunta:</h4>
        <div class="well" id="pregunta"  style="min-height: 150px;padding:10px;">

        </div>
    </div>
    <div class="col-lg-4">
        <h4 style="text-align:center">Respuesta</h4>
        <div class="well">
            <form action="contacto" method="post" name="f" id="f">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value="">
                <textarea name="respuesta" style="background-color: inherit;padding:10px;width:100%;height:150px;border:0"
                          maxlength="255" required placeholder="max: 255 caracteres..."></textarea>

        </div>
    </div>
    <div class="row text-center" id="row-submit" style="display:none">
        <button type="submit" class="btn btn-info">Mandar respuesta</button>
        </form>
    </div>
    @endif
</div>

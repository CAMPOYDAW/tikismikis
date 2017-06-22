
<?php
$edit=Session::get('edit');
?>
<script>
    var id_im="{{ $edit?$edit->id:'' }}";
    var imgs=<?= json_encode($imgs) ?>;
</script>
<h1 class="page-header">Eventos</h1>

<div class="row placeholders">
    @if($edit)
        <form action="{{url('admin/eventos/update')}}" method="post" role="form" id="eventos-form" enctype="multipart/form-data">
            @else
                <form action="{{url('admin/eventos')}}" method="post" role="form" id="eventos-form" enctype="multipart/form-data">
                    @endif
                    {{ csrf_field() }}
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="permanente" id="permanente" {{ $edit ? $edit->permanente ?'checked':'':'' }}>Permanente</label>
                                                <label><input type="checkbox" value="1" name="desactivar" {{ $edit ? $edit->baja ?'checked':'':'' }}>Desactivar</label>
                                            </div>
                                            <div class="input-daterange input-group datepicker" id="datepicker">
                                                <span class="input-group-addon">Fecha Evento</span>
                                                <input type="text" class="form-control" name="fecha" required value="{{ $edit?format_tb($edit->fecha):'' }}" {{ $edit?$edit->permanente==1?'disabled':'':'' }}/>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Título (max 30 caracteres)" maxlength="30" required value="{{ $edit?$edit->titulo:'' }}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                            <textarea name="descripcion" class="form-control" id="descripcion"
                                      placeholder="Haz una breve descripción del evento (max 255 caracteres)" maxlength="255" rows="4">{{ $edit?$edit->descripcion:'' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" name="cuando" id="cuando" class="form-control" placeholder="Aquí puedes poner cuando va a ser,( p.ej. todos los jueves ) o culaquier dato importante" value="{{ $edit?$edit->cuando:'' }}" maxlength="50"/>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" name="destacar" id="destacar" class="form-control" placeholder="Algo a destacar del evento (máximo 50 caracteres)" value="{{ $edit?$edit->destacar:'' }}" maxlength="50"/>
                                        </div>
                                    </div>
                                    @if($edit)
                                        <button type="submit" class="btn btn-default btn-primary">Modificar</button><a href="eventos" class="btn btn-default" style="margin-left:50px">Agregar Evento</a>
                                        <input type="hidden" name="id" value="{{ $edit->id }}">
                                    @else
                                        <button type="submit" class="btn btn-default btn-primary">Enviar</button>
                                    @endif
                                </div>

                            </div>




                            <div class="col-lg-6">
                                <div class="row">
                                    Imagen de fondo
                                </div>
                                <div class="row" id="img-form">
                                    <img src="{{url('img/fondo-eventos.jpg')}}" id="img_destino" width="60%">
                                </div>
                                <div class="row">
                                    <input class=form-control" type="file" name="foto" id="foto" accept="image/jpg,.jpg">
                                </div>
                                <div id="f_error">
                                    <span class="glyphicon glyphicon-ban-circle">&nbsp;&nbsp;</span>
                                </div>
                                <div id="f_ok">
                                    <span class="glyphicon glyphicon-ok-circle">&nbsp;&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

</div>
@if($edit)
    @if($edit->permanente)
        <script>
            document.getElementById("cuando").style.display="block";
        </script>
    @endif
@endif
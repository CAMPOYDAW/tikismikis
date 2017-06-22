
<?php
    $edit=Session::get('edit');
    $edit_lines=Session::get('edit_lines');
?>
<script>
    var id_im="{{ $edit?$edit->id:'' }}";
    var mensaje="{{ $mensaje?$mensaje:'' }}";
</script>
<h1 class="page-header">Menús</h1>

<div class="row placeholders">
@if($edit)
    <form action="{{url('admin/menus/update')}}" method="post" role="form" id="menus-form" enctype="multipart/form-data">
@else
    <form action="{{url('admin/menus')}}" method="post" role="form" id="menus-form" enctype="multipart/form-data">
@endif
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox">
                                <label><input type="checkbox" value="1" name="permanente" id="permanente" {{ $edit ? $edit->permanente ?'checked':'':'' }}>Permanente</label>
                                <label><input type="checkbox" value="1" name="soloImagen" id="soloImagen"{{ $edit ? $edit->soloImagen ?'checked':'':'' }}>Solo imagen</label>
                                <label><input type="checkbox" value="1" name="desactivar" {{ $edit ? $edit->desactivar ?'checked':'':'' }}>Desactivar</label>
                            </div>
                            <div class="input-daterange input-group datepicker" id="datepicker">
                                <span class="input-group-addon">Desde</span>
                                <input type="text" class="form-control" name="f_comienzo" required value="{{ $edit?format_tb($edit->f_comienzo):'' }}" {{ $edit?$edit->permanente==1?'disabled':'':'' }}/>
                                <span class="input-group-addon">hasta</span>
                                <input type="text" class="form-control" name="f_fin" required value=" {{ $edit?format_tb($edit->f_fin):'' }} " {{ $edit?$edit->permanente==1?'disabled':'':'' }}/>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Título (max 60 caracteres)" maxlength="60" required value="{{ $edit?$edit->title:'' }}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="descripcion" class="form-control" id="descripcion"
                                      placeholder="Haz una breve descripción del menú (max 200 caracteres" maxlength="200" rows="4">{{ $edit?$edit->descripcion:'' }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="precio" class="form-control" onkeypress="return NumCheck(event, this)" placeholder="P.V.P." value="{{ $edit?$edit->precio:'' }}"/>
                        </div>
                    </div>
                    @if($edit)
                        <button type="submit" class="btn btn-default btn-primary">Modificar</button><a href="menus" class="btn btn-default" style="margin-left:50px">Agregar Menú</a>
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                    @else
                        <button type="submit" class="btn btn-default btn-primary">Enviar</button>
                    @endif
                    </div>

                </div>

                <div class="col-lg-4" id="linea">
                    <div class="row">
                        platos del menú <input type="button" class="btn btn-info btn-xs" onclick="separador()" value=" + separador " {{ $edit?$edit->soloImagen==1?'disabled':'':'' }}/>

                    </div>
                    <div class="row">
                        <!--poner .select para buscador cuando veamos como funciona-->
                        <select class="form-control" onchange="plato(this.value)" {{ $edit?$edit->soloImagen==1?'disabled':'':'' }}>
                            <option value="">Elige plato</option>
                            <option value="1">Plato personalizado</option>
                            @foreach($platos as $p)
                                <option value="{{$p}}">{{$p}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div id="lineas">
                            <ul class="list-group">
                                @if($edit)
                                    @foreach($edit_lines as $line)
                                        @if($line['tipo']=='linea')
                                            <li class='list-group-item'>
                                                <button class='btn btn-xs btn-default' onclick='borrarInput(this)'>-</button>
                                                <input type='text' name='linea[]' value='{{ $line['texto'] }}'><input type='hidden' name='tipo[]' value='linea'>
                                            </li>
                                        @else
                                            <li class='list-group-item' >
                                                <button class='btn btn-xs btn-default' onclick='borrarInput(this)'>-</button>
                                                <input type='text' name='linea[]' value='{{ $line['texto'] }}'><input type='hidden' name='tipo[]' value='separador'>
                                            </li>
                                        @endif
                                    @endforeach

                                @endif
                            </ul>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="row">
                        Imagen de fondo
                    </div>
                    <div class="row" id="img-form">
                        <img src="{{url('img/fondo-menu.png')}}" id="img_destino" width="100%">
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
<?php
$edit=Session::get('edit');
$edit_cat_platos=Session::get('edit_cat_platos');
$edit_categorias=Session::get('edit_categorias');

?>
<script>
    var id_im="{{ $edit?$edit->id:'' }}";
    var imgs=<?= json_encode($imgs) ?>;
</script>
<h1 class="page-header">Carta</h1>
<div class="row placeholders">
    <div class="col-sm-5">
        <h2>Categorias</h2>
        @if($edit_categorias)
            <form action="{{url('admin/categorias/update')}}" method="post" role="form" id="categorias-form" enctype="multipart/form-data">
        @else
            <form action="{{url('admin/categorias')}}" method="post" role="form" id="categorias-form" enctype="multipart/form-data">
        @endif
                {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <input type="number" class="form-control" name="orden" id="orden" placeholder="orden" value="{{ $edit_categorias?$edit_categorias->orden:'' }}">
            </div>
            <div class="checkbox">

                <label><input type="checkbox" value="1" name="desactivar" {{ $edit_categorias ? $edit_categorias->baja ?'checked':'':'' }}>Desactivar</label>
            </div>
            <div class="col-lg-12">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre (max 100 caracteres)" maxlength="100" required value="{{ $edit_categorias?$edit_categorias->nombre:'' }}" >
            </div>
        </div>
        <br>
        @if($edit_categorias)
            <div class="row">
                <input type="hidden" name="id" value="{{ $edit_categorias->id }}">
                <button type="submit" class="btn btn-default btn-primary">Modificar</button><a href="carta" class="btn btn-default" style="margin-left:50px">Agregar Categoria</a>
            </div>
        @else
            <div class="row">
                <button type="submit" class="btn btn-default btn-primary">Enviar</button>
            </div>
        @endif
        </form>
                    <div class="table-responsive" style="height: 200px;">
                        <table class="table table-stripedt" id="tabla2">
                            <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Nombre</th>
                                <th>editar</th>
                                <th>ON/OFF</th>
                                <th>borrar</th>
                            </tr>
                            </thead>
                            @foreach($categorias as $key=>$v)
                                <tr>
                                    <td> {{$v->orden}}</td>
                                    <td class="tit"> {{$v->nombre}}</td>
                                    <td><a href="{{ url('admin/categorias/editar/'.$v->id) }}" class="glyphicon glyphicon-edit"></a></td>
                                    <td><label for="c{{$v->id}}">{!!$v->baja==0?'<span class=\'glyphicon glyphicon-ok-circle\'>on</span>':'<span class=\'glyphicon glyphicon-ban-circle\'>off</span>'!!}<input type="checkbox" id="c{{$v->id}}" onclick="desactivar(this,{{$v->id}})" tabla="categorias" {{$v->baja==0?'':'checked'}}></label></td>
                                    <td><a href="" class="btn btn-delete glyphicon glyphicon-remove" data="{{$v->id}}" tabla="categorias"></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
    </div>
    <div class="col-sm-7">
    </div>
    <div class="col-sm-7" style="border-left:1px solid lightgray">
        <h2>Platos</h2>
        <div class="col-sm-6">
            @if($edit)
                <form action="{{url('admin/platos/update')}}" method="post" role="form" id="categorias-form" enctype="multipart/form-data" onsubmit="return validar()">
            @else
                <form action="{{url('admin/platos')}}" method="post" role="form" id="categorias-form" enctype="multipart/form-data" onsubmit="return validar()">
            @endif
                    {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" class="form-control" name="nombre" id="title" placeholder="Nombre (max 200 caracteres)"
                           maxlength="200" required value="{{ $edit?$edit->nombre:'' }}" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                                <textarea name="descripcion" class="form-control" id="descripcion"
                                          placeholder="Haz una breve descripción del plato (max 200 caracteres" maxlength="200" rows="4">{{ $edit?$edit->descripcion:'' }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" name="precio" class="form-control" onkeypress="return NumCheck(event, this)" placeholder="P.V.P." value="{{ $edit?$edit->precio:'' }}"/>
                </div>
                <div class="checkbox">

                    <label><input type="checkbox" value="1" name="desactivar" {{ $edit?$edit->baja?'checked':'':'' }}>Desactivar</label>
                </div>
            </div>
            <p>Categorías</p>
            <div class="row">
                <select class="form-control" name="categorias[]" multiple="multiple" id="categorias">
                        @if($edit_cat_platos)

                            @foreach($categorias as $c)
                                @php($sel=false)
                                @foreach($edit_cat_platos as $ec)
                                    @if($ec['id']==$c->id)
                                        @php($sel=true)
                                    @endif
                                @endforeach
                                @if($sel)
                                    <option value="{{  $c->id }}" selected='selected'>{{ $c->nombre }}</option>
                                @else
                                    <option value="{{  $c->id }}">{{ $c->nombre }}</option>
                                @endif
                            @endforeach
                        @else
                            @foreach($categorias as $c)
                                <option value="{{  $c->id }}">{{ $c->nombre }}</option>
                            @endforeach
                        @endif

                </select>
            </div>
            <div class="row">
                @if($edit)
                    <button type="submit" class="btn btn-default btn-primary">Modificar</button><a href="carta" class="btn btn-default" style="margin-left:50px">Agregar Menú</a>
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                @else
                    <button type="submit" class="btn btn-default btn-primary">Enviar</button>
                @endif
            </div>
            <div id="f_error">
                <span class="glyphicon glyphicon-ban-circle">&nbsp;&nbsp;</span>
            </div>
            <div id="f_ok">
                <span class="glyphicon glyphicon-ok-circle">&nbsp;&nbsp;</span>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="row">
                Imagen de fondo
            </div>
            <div class="row" id="img-form">
                <img src="{{url('img/carta-restaurante.png')}}" id="img_destino" width="100%">
            </div>
            <div class="row">
                <input class=form-control" type="file" name="foto" id="foto" accept="image/jpg,.jpg">
            </div>

        </div>
        </form>
    </div>
</div>
<?php
$edit=Session::get('edit');
$error=Session::get('error');
$message=Session::get('message');
?>
@if($error)
<script>
    var err="";
@foreach($error as $e)

    err+='{{ $e }}\n';

@endforeach
    alert(err);
</script>
@endif
@if($message)
    <script>
     alert('{{ $message }}');
    </script>
@endif
<script>var id_im=''</script>
<h1 class="page-header">Usuarios</h1>

<div class="row placeholders">
    @if($edit)
        <form action="{{url('admin/usuarios/update')}}" method="post" role="form" id="usuarios-form" enctype="multipart/form-data">
            @else
         <form action="{{url('admin/usuarios')}}" method="post" role="form" id="eventos-form" enctype="multipart/form-data">
                    @endif
                    {{ csrf_field() }}
            <div class="container">
                    <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" value="1" name="desactivar" {{ $edit ? $edit->baja ?'checked':'':'' }}>Desactivar</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre (max 30 caracteres)" maxlength="30" required value="{{ $edit?$edit->name:'' }}" >
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password (entre 6 y 18 caracteres)" value="" maxlength="18" {{ $edit?'':'required' }}/>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail (max 255 caracteres)" value="{{ $edit?$edit->email:'' }}" maxlength="255" required/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="{{ $edit->type or 'employ' }}">
                                        @if($edit)
                                            <button type="submit" class="btn btn-default btn-primary">Modificar</button><a href="usuarios" class="btn btn-default" style="margin-left:50px">Agregar Usuario</a>
                                            <input type="hidden" name="id" value="{{ $edit->id }}">
                                        @else
                                            <button type="submit" class="btn btn-default btn-primary">Enviar</button> (Solo se crearán usuarios employ)
                                        @endif
                                    </div>

                        </div>
                        <div class="col-lg-3">
                            <div id="f_error">
                                <span class="glyphicon glyphicon-ban-circle">&nbsp;&nbsp;</span>
                            </div>
                            <div id="f_ok">
                                <span class="glyphicon glyphicon-ok-circle">&nbsp;&nbsp;</span>
                            </div>
                        </div>
                </div>





        </form>

</div>
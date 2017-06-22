<?php
$error=Session::get('error');
$message=Session::get('message');
?>
@if($error || $message)
<script>
    alert('{{$error[0] or $message}}');
</script>
@endif
<script>var id_im=''</script>
<h1 class="page-header">Dashboard</h1>

<div class="row placeholders">

    <div class="col-xs-6 col-sm-3 placeholder" id="datos-user">
        <h3>Tus datos</h3>
        <div class="row">
            <span class="text-muted">Nombre: {{ Auth::user()->name }}</span>
        </div>
        <div class="row">
            <span class="text-muted">E-mail: {{ Auth::user()->email }}</span>
        </div>
        <div class="row">
            <span class="text-muted"> {{ Auth::user()->type=="employ"?"Empleado":"Administrador" }}</span>
        </div>
        <div class="row" style="margin-top:50px;">
            <a class="btn btn-info" onclick="edit_user()">Editar</a>
        </div>
    </div>

    <div class="col-xs-6 col-sm-3 placeholder" id="edit-user" style="display:none">
        <h3>Modificar datos</h3>
        <form action="{{url('admin/updateUser')}}" method="post" role="form" id="usuarios-form" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="col-lg-12">

            <div class="row">
                <div class="col-lg-12">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre (max 30 caracteres)" maxlength="30" required value="{{ Auth::user()->name }}" >
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password (entre 6 y 18 caracteres)" value="" maxlength="18" />
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail (max 255 caracteres)" value="{{ Auth::user()->email }}" maxlength="255" required/>
                </div>
            </div>
            <input type="hidden" name="type" id="type" value="employ">

                <button type="submit" class="btn btn-default btn-primary">Modificar</button><a class="btn btn-danger" onclick="edit_user()" style="margin-left:10px">Cancelar</a>
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="type" value="{{ Auth::user()->type }}">

        </div>
        </form>
    </div>




    <div class="col-xs-6 col-sm-3 placeholder">


    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
</div>
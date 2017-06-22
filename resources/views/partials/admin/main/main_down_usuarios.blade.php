
<h2 class="sub-header" style="text-align:left">Tabla de usuarios</h2>
<div class="table-responsive" style="height:480px">
    @if(isset($users))
        <table class="table table-stripedt" id="tabla">
            <thead>
            <tr>

                <th>ID</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Tipo</th>
                <th>editar</th>
                <th>ON/OFF</th>
                <th>borrar</th>
            </tr>
            </thead>

            @foreach($users as $key=>$v)



                <tr>
                    <td>{{ $v->id }}</td>

                    <td class="tit"> {{$v->name}}</td>
                    <td >{{ $v->email }}</td>
                    <td>{{ $v->type }}</td>
                    <td><a href="{{ url('admin/usuarios/editar/'.$v->id) }}" class="glyphicon glyphicon-edit" ></a></td>
                    @if(Auth::id()==$v->id)
                    <td></td><td></td>
                    @else
                    <td class="onoff"><label for="n{{$v->id}}">{!!$v->baja==0?'<span class=\'glyphicon glyphicon-ok-circle\'>on</span>':'<span class=\'glyphicon glyphicon-ban-circle\'>off</span>'!!}<input type="checkbox" id="n{{$v->id}}" onclick="desactivar(this,{{$v->id}})" tabla="usuarios" {{$v->baja==0?'':'checked'}}></label></td>
                    <td><a href="" class="btn btn-delete glyphicon glyphicon-remove" data="{{$v->id}}" tabla="usuarios"></a></td>
                    @endif
                </tr>
            @endforeach

        </table>
    @else
        <h3>NO HAY USUARIOS PARA MOSTRAR</h3>
    @endif
</div>
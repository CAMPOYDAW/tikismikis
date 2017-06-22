
<h2 class="sub-header">Tabla de platos</h2>
<div class="table-responsive">
    <table class="table table-stripedt" id="tabla">
        <thead>
        <tr>

            <th>ID</th>
            <th>Nombre</th>
            <th>descripción</th>
            <th>editar</th>
            <th>ON/OFF</th>
            <th>borrar</th>
        </tr>
        </thead>
        @foreach($platos as $key=>$v)



            <tr>
                <td>{{ $v->id }}</td>
                <td class="tit"> {{$v->nombre}}</td>
                <td>{{$v->descripcion}}</td>
                <td><a href="{{ url('admin/carta/editar/'.$v->id) }}" class="glyphicon glyphicon-edit" onclick="editar(this,{{$v->id}})"></a></td>
                @php($tabla='platos')
                <td><label for="n{{$v->id}}">{!!$v->baja==0?'<span class=\'glyphicon glyphicon-ok-circle\'>on</span>':'<span class=\'glyphicon glyphicon-ban-circle\'>off</span>'!!}<input type="checkbox" id="n{{$v->id}}" onclick="desactivar(this,{{$v->id}})" tabla="platos" {{$v->baja==0?'':'checked'}}></label></td>
                <td><a href="" class="btn btn-delete glyphicon glyphicon-remove" data="{{$v->id}}" tabla="platos"></a></td>
            </tr>
        @endforeach
    </table>
</div>
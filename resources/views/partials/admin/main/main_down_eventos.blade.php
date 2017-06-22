
<h2 class="sub-header">Tabla de eventos</h2>
<div class="table-responsive">
    @if(isset($eventos))
    <table class="table table-stripedt" id="tabla">
        <thead>
        <tr>

            <th>ID</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>mandar email</th>
            <th>editar</th>
            <th>ON/OFF</th>
            <th>borrar</th>
        </tr>
        </thead>

        @foreach($eventos as $key=>$v)



            <tr>
                <td>{{ $v->id }}</td>
                <td class="com">
                    {{$v['fecha']==null?"Permanente": format_tb($v['fecha']) }}</td>
                <td class="tit"> {{$v->titulo}}</td>
                <td class="email"><span class="glyphicon glyphicon-envelope"></span></td>
                <td><a href="{{ url('admin/eventos/editar/'.$v->id) }}" class="glyphicon glyphicon-edit" onclick="editar(this,{{$v->id}})"></a></td>
                @php($tabla='eventos')
                <td class="onoff"><label for="n{{$v->id}}">{!!$v->baja==0?'<span class=\'glyphicon glyphicon-ok-circle\'>on</span>':'<span class=\'glyphicon glyphicon-ban-circle\'>off</span>'!!}<input type="checkbox" id="n{{$v->id}}" onclick="desactivar(this,{{$v->id}})" tabla="eventos" {{$v->baja==0?'':'checked'}}></label></td>
                <td><a href="" class="btn btn-delete glyphicon glyphicon-remove" data="{{$v->id}}" tabla="eventos"></a></td>
            </tr>
        @endforeach

    </table>
    @else
        <h3>NO HAY EVENTOS PARA MOSTRAR</h3>
    @endif
</div>
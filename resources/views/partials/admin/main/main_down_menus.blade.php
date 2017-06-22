
<h2 class="sub-header">Tabla de menús</h2>
<div class="table-responsive">
    <table class="table table-stripedt" id="tabla">
        <thead>
        <tr>
            <th>Desde</th>
            <th>Hasta</th>
            <th>Título</th>
            <th>onlyImg</th>
            <th>P.V.P</th>
            <th>vista previa</th>
            <th>editar</th>
            <th>ON/OFF</th>
            <th>borrar</th>
        </tr>
        </thead>
        @foreach($menus as $key=>$v)



            <tr>
                <td class="com">
                    {{$v['f_comienzo']==null?"Permanente": format_tb($v['f_comienzo']) }}</td>
                <td class="fin">{{$v['f_fin']==null?"Permanente":format_tb($v['f_fin'])}}</td>
                <td class="tit"> {{$v['title']}}</td>
                <td class="sim">{{$v['soloImagen']==0?'NO':'SI'}}</td>
                <td>{{$v['precio']}}</td>
                <td>{!!  $p_menu[$v['id']] !!}</td>
                <td><a href="{{url('admin/menus/editar/'.$v['id'])}}" class="glyphicon glyphicon-edit" onclick="editar(this,{{$v['id']}})"></a></td>
                <td class="onoff"><label for="n{{$v['id']}}">{!!$v['desactivar']==0?'<span class=\'glyphicon glyphicon-ok-circle\'>on</span>':'<span class=\'glyphicon glyphicon-ban-circle\'>off</span>'!!}<input type="checkbox" id="n{{$v['id']}}" onclick="desactivar(this,{{$v['id']}})" tabla="" {{$v['desactivar']==0?'':'checked'}}></label></td>
                <td><a href="" class="btn btn-delete glyphicon glyphicon-remove" data="{{$v['id']}}"></a></td>
            </tr>
        @endforeach
    </table>
</div>

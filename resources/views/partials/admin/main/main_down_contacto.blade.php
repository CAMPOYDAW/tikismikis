
<h2 class="sub-header">Tabla de consultas respondidas</h2>
<div class="table-responsive" id="tabla-consultas">
    <table class="table table-stripedt" id="tabla">
        <thead>
        <tr>
            <th>F.consulta</th>
            <th>f.respuesta</th>
            <th>Cliente</th>
            <th>email</th>
            <th>Respondió</th>
            <th>vista previa</th>
        </tr>
        </thead>
        @foreach(session()->get('contacts_con') as $key=>$v)



            <tr>
               <td>{{ $v->created_at }}</td>
                <td>{{ $v->updated_at }}</td>
                <td>{{ $v->user_name }}</td>
                <td>{{ $v->user_email }}</td>
                <td>{{ $v->quien_responde }}</td>
                <td class="v-previa"><a href='' class='btn bt glyphicon glyphicon-zoom-in' data-id="{{ $v->id }}"></a></td>
                <div id="pop-{{ $v->id }}"class="pop-consulta jumbotron">
                    <div class="row">
                        <p><b>Pregunta: </b>{{ $v->user_name }}</p>
                        <p><small><i>"{{ $v->pregunta }}"</i></small></p>
                    </div>
                    <hr>
                    <div class="row">
                        <p><b>Respuesta: </b>{{ $v->quien_responde }}</p>
                        <p><small><i>"{{ $v->respuesta }}"</i></small></p>
                    </div>
                </div>
            </tr>
        @endforeach
    </table>
</div>

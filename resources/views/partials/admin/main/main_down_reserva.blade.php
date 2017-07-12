
<h2 class="sub-header" style="text-align:left">Tabla con historial de reservas</h2>
<div class="table-responsive" style="height:480px">

        <table class="table table-stripedt" id="tabla">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
                <th>E-mail</th>
                <th>Nº com</th>
                <th>Aceptada</th>
            </tr>
            </thead>

            @foreach(session()->get('reservas_his') as $key=>$v)



                <tr>
                    <td>{{ format_tb($v->fecha) }}</td>
                    <td>{{ $v->hora }}</td>
                    <td>{{ $v->user_name }}</td>
                    <td>{{ $v->user_email }}</td>
                    <td>{{ $v->comensales }}</td>
                    <td>{{ $v->estado?'SI':'NO' }}</td>

                </tr>
            @endforeach

        </table>

</div>
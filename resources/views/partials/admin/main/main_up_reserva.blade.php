<?php
$message=Session::get('message');
?>
@if($message)
    <script>
        alert('{{$message}}');
    </script>
@endif
<script>var id_im=''</script>


<h1 class="page-header">Reservas</h1>
<div id="admin-reservas" class="row placeholder">
    <div class="col-lg-5">
        <h4 style="text-align:center">Reservas sin confirmar</h4>
        @if(count(session()->get('reservas_sin'))>0)
        @foreach(session()->get('reservas_sin') as $rs)
            <div class="well">
                <table style="text-align: left">
                    <tr style="text-align: left">
                        <td><span class="text-muted">Nombre:</span></td>
                        <td><span class="text-muted"><b>{{ $rs->user_name }}</b></span></td>
                        <form method="post" action="{{ url('admin/reservas') }}" onsubmit="return confirmacion('confirmar')">{{ csrf_field() }}
                            <input type="hidden" name="conf" value="1">
                            <input type="hidden" name="id" value="{{ $rs->id }}">
                        <td class="boton-res"><button type="submit" class="btn btn-info btn-xs")">confirmar</button></td>
                        </form>
                    </tr>
                    <tr>
                        <td><span class="text-muted">E-mail:</span></td>
                        <td><span class="text-muted"><b>{{ $rs->user_email }}</b></span></td>
                        <td class="boton-res"></td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">Comensales:</span></td>
                        <td><span class="text-muted"><b>{{ $rs->comensales }}</b></span></td>
                        <form method="post" action="{{ url('admin/reservas') }}" onsubmit="return confirmacion('denegar')">{{ csrf_field() }}
                            <input type="hidden" name="conf" value="0">
                            <input type="hidden" name="id" value="{{ $rs->id }}">
                        <td class="boton-res"><button type="submit" class="btn btn-danger btn-xs" onclick="reservas(false,{{ $rs->id }})">denegar</button></td>
                        </form>
                    </tr>
                    <tr>
                        <td><span class="text-muted">Fecha:</span></td>
                        <td><span class="text-muted"><b>{{ format_tb($rs->fecha) }}</b></span></td>
                        <td class="boton-res"></td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">Hora:</span></td>
                        <td><span class="text-muted"><b>{{ $rs->hora }}</b></span></td>
                        <form method="post" action="{{ url('admin/reservas/anular') }}" onsubmit="return confirmacion('anular')">{{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $rs->id }}">
                        <td class="boton-res"><button type="submit" class="btn btn-danger btn-xs">Anular</button></td>
                        </form>
                    </tr>
                </table>
            </div>
        @endforeach
        @else
            <div class="well">
                <span class="text-muted">No tiene reservas por confirmar</span>
            </div>
        @endif
    </div>
    <div class="col-lg-3">
        <h4 style="text-align:center">Reservas confirmadas para hoy</h4>
        @if(count(session()->get('reservas_hoy'))>0)
            @foreach(session()->get('reservas_hoy') as $rs)
                <div class="well">
                    <table style="text-align: left">
                        <tr style="text-align: left">
                            <td><span class="text-muted">Nombre:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->user_name }}</b></span></td>
                            <td class="boton-res"></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">E-mail:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->user_email }}</b></span></td>
                            <td class="boton-res"></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Comensales:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->comensales }}</b></span></td>
                            <td class="boton-res"></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Fecha:</span></td>
                            <td><span class="text-muted"><b>{{ format_tb($rs->fecha) }}</b></span></td>
                            <td class="boton-res"></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Hora:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->hora }}</b></span></td>
                            <td class="boton-res"></td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @else
            <div class="well">
                <span class="text-muted">No tiene reservas confirmadas para hoy</span>
            </div>
        @endif
    </div>

    <div class="col-lg-4">
        <h4 style="text-align:center">Reservas confirmadas futuras</h4>
        @if(count(session()->get('reservas_fut'))>0)
            @foreach(session()->get('reservas_fut') as $rs)
                <div class="well">
                    <table >
                        <tr>
                            <td><span class="text-muted">Nombre:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->user_name }}</b></span></td>

                        </tr>
                        <tr>
                            <td><span class="text-muted">E-mail:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->user_email }}</b></span></td>

                        </tr>
                        <tr>
                            <td><span class="text-muted">Comensales:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->comensales }}</b></span></td>

                        </tr>
                        <tr>
                            <td><span class="text-muted">Fecha:</span></td>
                            <td><span class="text-muted"><b>{{ format_tb($rs->fecha) }}</b></span></td>

                        </tr>
                        <tr>
                            <td><span class="text-muted">Hora:</span></td>
                            <td><span class="text-muted"><b>{{ $rs->hora }}</b></span></td>
                        </tr>
                        <tr>


                            <form method="post" action="{{ url('admin/reservas/anular') }}" onsubmit="return confirmacion('anular')">{{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $rs->id }}">
                                <td class="boton-res"><button type="submit" class="btn btn-danger btn-xs">Anular</button></td>
                            </form>
                            <td></td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @else
            <div class="well">
                <span class="text-muted">No tiene reservas por confirmar</span>
            </div>
        @endif
    </div>

    </div>
</div>

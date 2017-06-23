@if($conf==1)
    <body style="width:600px;color:#980748;border:1px solid #980748;padding:50px;font-style: italic;">
        <h1 style="text-align: center">TikismikisBar</h1>
        <p>&nbsp;</p>
        <div style="text-align: center">
            <p>Con la presente le confirmamos la reserva hecha por usted en nuestro restaurante</p>
        </div>
        <table style="width:300px;margin:auto">
            <tr>
                <td>nombre:</td><td>{{ $nombre }}</td>
            </tr>
            <tr>
                <td>comensales:</td><td>{{ $comensales }}</td>
            </tr>
            <tr>
                <td>Fecha:</td><td>{{ format_tb($fecha) }}</td>
            </tr>
            <tr>
                <td>Hora:</td><td>{{ $hora }}</td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <div style="text-align: center">
            <p>Podrá Anular la reserva hasta el día antes llamándonos a nuestro teléfono</p>
        </div>

        <p>&nbsp;</p>
        <div style="text-align: left;padding:10px">
            <p style="font-size:0.8em;text-align:left">TikismikisBar</p>
            <p style="font-size:0.8em;text-align:left">Teléfono: 666666666</p>
            <p style="font-size:0.8em;text-align:left"><a href="http//:www.tikismikisbar.es">web Tikismikis</a></p>
        </div>

    </body>
@else
    <body style="width:600px;color:#980748;border:1px solid #980748;padding:50px;font-style:  italic;">
    <h1 style="text-align: center">TikismikisBar</h1>
    <p>&nbsp;</p>
    <div style="text-align: center">
        <p>Sentimos informarle de que para la fecha y hora indicada no tenemos mesa, por lo que su reserva queda anulada</p>
        <p>&nbsp;</p>
        <p>Póngase en contacto con nosotros a través del teléfono para buscar una alternativa</p>

        <p>&nbsp;</p>
        <p>Rogamos disculpe las molestias</p>
    </div>
    <p>&nbsp;</p>
    <div style="text-align: left;padding:10px">
        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
        <p style="font-size:0.8em;text-align:left">TikismikisBar</p>
        <p style="font-size:0.8em;text-align:left">Teléfono: 666666666</p>
        <p style="font-size:0.8em;text-align:left"><a href="http//:www.tikismikisbar.es">web Tikismikis</a></p>
    </div>


    </body>
@endif
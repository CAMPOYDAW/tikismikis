<body style="width:600px;color:#980748;border:1px solid #980748;padding:50px;font-style: italic;">
<h1 style="text-align: center">TikismikisBar</h1>
<h2 style="text-align: center">{{ $titulo }}</h2>
@if($permanente==1)
<h3 style="text-align: center">{{ $cuando }}</h3>
@else
<h3 style="text-align: center">{{ $fecha }}</h3>
@endif
<p>&nbsp;</p>
<div style="text-align:center">
    <p>Estimado {{ $nombre }} :</p>
    @if($permanente==0)
    <p> Le invitamos a venir a nuestro evento {{ $titulo }} que se celebrará el próximo {{ $fecha }}</p>
    @else
        <p> Le invitamos a venir a nuestro evento {{ $titulo }} </p>
    @endif
    <div style="width:60$;height: 400px;border:solid 1px #980748">
        Aquí foto
    </div>
    <p>{{ $descripcion }}</p>
    <p><b>{{ $destacar }}</b></p>
</div>
<div style="text-align: left;padding:10px">
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    <p style="font-size:0.8em;text-align:left">TikismikisBar</p>
    <p style="font-size:0.8em;text-align:left">Teléfono: 666666666</p>
    <p style="font-size:0.8em;text-align:left"><a href="http//:www.tikismikisbar.es">web Tikismikis</a></p>
</div>
</body>
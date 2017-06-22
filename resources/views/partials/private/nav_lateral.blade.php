<ul id="blmenudeslizante">
    @if(Request::is('reserva'))
        <li class="blink"><a class="active2">Reserva</a></li>
        <li class="blink"><a href="{{ url('contacto') }}">Contactar</a></li>
        <li class="blink"><a href="{{ url('datos') }}">Mis datos</a></li>
    @elseif(Request::is('contacto'))
        <li class="blink"><a href="{{ url('reserva') }}">Reserva</a></li>
        <li class="blink"><a class="active2">Contactar</a></li>
        <li class="blink"><a href="{{ url('datos') }}">Mis datos</a></li>
    @else
        <li class="blink"><a href="{{ url('reserva') }}">Reserva</a></li>
        <li class="blink"><a href="{{ url('contacto') }}">Contactar</a></li>
        <li class="blink"><a class="active2">Mis datos</a></li>
    @endif
</ul>
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="{{Request::is('admin')?'active':''}}"><a href="{{url('admin')}}">Inicio<span class="sr-only">(current)</span></a></li>

    </ul>
    @if (Auth::user()->type == 'admin')
        <ul class="nav nav-sidebar">
            <li class="{{Request::is('admin/contents')?'active':''}}"><a href="#">Gestor de contenidos</a></li>

        </ul>
        <ul class="nav nav-sidebar">
            <li class="{{Request::is('admin/menus')?'active':''}}"><a href="{{url('admin/menus')}}">Menús</a></li>
            <li class="{{Request::is('admin/carta')?'active':''}}"><a href="{{url('admin/carta')}}">Carta</a></li>
            <li class="{{Request::is('admin/eventos')?'active':''}}"><a href="{{url('admin/eventos')}}">Eventos</a></li>
            <li class="{{Request::is('admin/usuarios')?'active':''}}"><a href="{{url('admin/usuarios')}}">Usuarios</a></li>
        </ul>
    @endif
    <ul class="nav nav-sidebar">
        <li class="{{Request::is('admin/reservas')?'active':''}}"><a href="">Reservas</a></li>
        <li class="{{Request::is('admin/contactos')?'active':''}}"><a href="">Contacto</a></li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @if(Request::is('admin'))
        @include('partials.admin.main.main_up_admin')
        @include('partials.admin.main.main_down_admin')
    @elseif(Request::is('admin/menus'))
        @include('partials.admin.main.main_up_menus')
        @include('partials.admin.main.main_down_menus')
    @elseif(Request::is('admin/carta'))
        @include('partials.admin.main.main_up_carta')
        @include('partials.admin.main.main_down_carta')
    @elseif(Request::is('admin/eventos'))
        @include('partials.admin.main.main_up_eventos')
        @include('partials.admin.main.main_down_eventos')
    @elseif(Request::is('admin/usuarios'))
        @include('partials.admin.main.main_up_usuarios')
        @include('partials.admin.main.main_down_usuarios')
    @endif
</div>
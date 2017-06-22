
<div id="portada">

    <div id="logo-port">
        <a href="{{url('/')}}"><img src="{{url('/img/logo-dib-blanco.png')}}"></a>
    </div>
    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="inner cover">
                    <h2 class="cover-heading"><img src="{{url('/img/logo-rec-white.png')}}" width="100%"></h2>
                    <h3 style="font-size:1.8em"></h3>
                    <p class="lead">Ven y disfruta de un sitio único en pleno de corazón de Elda. Disponemos de deliciosos platos elaborados con ingredientes de primera calidad así como de una extensa carta de vinos</p>
                    <h4 style="font-size:1.5em;font-weight: bold"></h4>
                    @if (Auth::user()!==null)
                        <a href="{{url('/reserva')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>
                    @elseif(Request::is('menus') or Request::is('login-public') or Request::is('situacion') or Request::is('/'))
                        <a class="ancla btn btn-lg btn-default" data-ancla="ancla-login-public">Haz tu reserva Online</a>
                    @else
                        <a href="{{url('/login-public')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>
                    @endif

                    </p>
                </div>



            </div>

        </div>

    </div>
</div>

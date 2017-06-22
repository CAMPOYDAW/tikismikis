<div id="ancla-login-public"></div>
<div id="login">
    @if(Auth::user()==null || Auth::user()->type!='user')
    <div id="login-header">
        <h2>Loguéate si quieres reservar o contactar con nosotros</h2>

    </div>

    <div id="login-form">
        @include('partials.form-login')
        @include('partials.form-register')
    </div>
    @else
        <div id="login-header" style="margin-top:10%">
            <h2>RESERVA MEDIANTE NUESTRA WEB !!!!</h2>

            <p style="text-align:center;margin-top:50px"><a style="position: relative;z-index: 0;padding:30px 50px;font-size:1.5em" href="{{url('/reserva')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a></p>


        </div>
    @endif
</div>
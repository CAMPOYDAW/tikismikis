<form class="form-horizontal" id="form-login" role="form" method="POST" action="{{Request::is('login')?Route('login'): url('reserva') }}">
    {{ csrf_field() }}
    <div class="psw">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" class="btn btn-default" type="email" name="email" value="{{ old('email') }}" required placeholder="E-Mail">
            @if ($errors->has('email'))
                <span class="help-block" style="background-color:rgba(255,125,125,.5);">
                    <strong style="{{ Request::is('login') ? 'color:red' : 'color:transparent'}};">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" class="btn btn-default" type="password" name="password" required placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block" style="background-color:rgba(255,125,125,.5);">
                    <strong  style="{{ Request::is('login') ? 'color:red' : 'color:transparent'}};">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="checkbox">
                    Remember Me <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left:{{ Request::is('login')?'-100px':''}}">
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-info" name="enter" id="enter" value="LOGUEATE AHORA">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                ¿Olvidaste tu Password?
            </a>
        </div>

       @if(! Request::is('login'))
        <div class="form-group" id="new">
            <a class="btn btn-link">
                ¿Eres nuevo? Créate una cuenta
            </a>
        </div>
        @endif
    </div>

</form>

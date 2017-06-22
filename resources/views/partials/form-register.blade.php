
                    <form class="form-horizontal" id="form-register" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="psw">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input class="btn btn-default" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input class="btn btn-default" id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="E-Mail">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input class="btn btn-default" id="password" type="password" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                    <input class="btn btn-default" id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repetir password">
                            </div>

                            <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="REGISTRATE">
                            </div>
                            <div class="form-group" id="log">
                                <a class="btn btn-link">
                                    Login
                                </a>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="user">
                    </form>

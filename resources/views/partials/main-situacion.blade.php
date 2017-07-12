<div id="eventos-seccion">
    <div class="container">
        <h2>
            <em><img src='{{url('img/logo-rec-white.png')}}' width='50%'></em><br>
            Estamos en:
        </h2>
    </div>

    <div class="container">


                    <div class="row" style="padding-top:100px;margin-bottom:50px;border-bottom: 1px solid white">

                        <div class="col-sm-6">
                            <iframe src="{{ C_MAPS_EMB }}" width="80%" height="300px" frameborder="2" style="border:2px solid black;border-radius:10px" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <h3 style="border-bottom:1px solid white;color:white">{{ C_DIRECCION }}</h3>
                            <h3>{{ C_CP }} - {{ C_POBLACION }} ( {{ C_PROVINCIA }} )</h3>
                            <div>
                                <a href="tel:{{ C_TFIJO }}">Teléfono fijo: {{ C_TFIJO  }}</a>
                            </div>
                            <div>
                                <a href="tel:{{ C_TMOVIL }}">Teléfono móvil: {{ C_TMOVIL  }}</a>
                            </div>
                            <h3>{{ C_EMAIL }}</h3>

                        </div>

                    </div>
                    <div class="limpia"></div>
        <div class="row" style="margin-top:-30px;border-bottom: 1px solid white;text-align: center">
            <div class="col-sm-4">
                <a href="{{ C_TRIP }}" target="_blank"> <img src="{{ url('img/tripadvisor-logo.png') }}"></a>
            </div>
            <div class="col-sm-4">
                <a href="{{ C_FOURSQUARE }}" target="_blank"> <img src="{{ url('img/foursquare-logo.png') }}" width="25%"></a>
            </div>
            <div class="col-sm-4">
                <a href="{{ C_FACEBOOK }}" target="_blank"> <img src="{{ url('img/facebook-logo.png') }}" width="25%"></a>
            </div>

        </div>

    </div>

</div>
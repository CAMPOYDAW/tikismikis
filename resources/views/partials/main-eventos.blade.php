<div id="eventos-seccion">
    <div class="container">
        <h2>
            <em><img src='{{url('img/logo-rec-white.png')}}' width='50%'></em>
            Nuestros próximos eventos
        </h2>
    </div>

    <div class="container">
        @if(count($eventos)>0)
        @foreach($eventos as $key=>$v)
        @if($key%2==0)

            <div class="row" style="padding-top:100px;margin-bottom:50px;border-bottom: 1px solid white">

                <div class="col-sm-6">
                    <img class="img-event" src="{{ File::exists(public_path('img/eventos/tikismikisEventos-'.$v['id'].'.jpg'))?'img/eventos/tikismikisEventos-'. $v['id'].'.jpg ':'img/fondo-eventos.jpg'}}" width="100%">

                </div>
                <div class="col-sm-6">
                    <h1 style="border-bottom:1px solid white;color:white">{{ $v['title'] }}</h1>
                    <h2>{{ $v['fecha'] }}</h2>
                    <div>
                        {{ $v['descripcion'] }}
                    </div>
                    <h3>{{ $v['destacar'] }}</h3>

                </div>

            </div>
            <div class="limpia"></div>
        @else

            <div class="row" style="padding-top:100px;margin-bottom:50px;border-bottom: 1px solid white">

                <div class="col-sm-6">
                    <h1 style="border-bottom:1px solid white;color:white">{{ $v['title'] }}</h1>
                    <h2>{{ $v['fecha'] }}</h2>
                    <div>
                      {{ $v['descripcion'] }}
                    </div>
                    <h3>{{ $v['destacar'] }}</h3>
                </div>
                <div class="col-sm-6">
                    <img class="img-event" src="{{ File::exists(public_path('img/eventos/tikismikisEventos-'.$v['id'].'.jpg'))?'img/eventos/tikismikisEventos-'. $v['id'].'.jpg ':'img/fondo-eventos.jpg'}}" width="100%">

                </div>
            </div>
            <div class="limpia"></div>
        @endif
        @endforeach
        @else
            <h3 style="text-align:center">En estos momentos no tenemos ningún evento programado</h3>
        @endif
    </div>

</div>
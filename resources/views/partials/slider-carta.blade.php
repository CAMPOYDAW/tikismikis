

<!--
       If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
       Slide effect: slide, fade
       Text Align: slide_style_center, slide_style_left, slide_style_right
       Add Text Animation: https://daneden.github.io/animate.css/
       -->


<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="10000" style="margin-bottom: 50px;">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <?php $cont=1 ?>
        @foreach($platos as $pl)
            <li data-target="#bootstrap-touch-slider" data-slide-to="{{ $cont }}"></li>
            <?php $cont++ ?>
        @endforeach

    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="border:0">

            <!-- Slide Background -->
            <img class="slide-image" src="{{ url('/img/carta-restaurante.png') }}" alt="TikismikisBar-Carta">
            <div class="bs-slider-overlay"></div>

            <div class="container">
                <div class="row">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <!-- <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>-->
                        <p data-animation="animated zoomInRight"><img src='{{ url('img/logo-dib-white.png') }}' width='10%'></p>
                        <h1 data-animation="animated lightSpeedIn">Disfruta de nuestra amplia carta de platos en un ambiente inigualable</h1><br>
                        <a href="{{ url(Auth::user()?'/reserva':'/login-public')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>

                    </div>
                </div>
            </div>
        </div>
        <?php $cont=1 ?>
    @foreach($platos as $pl)
       @if($cont%3==1)
        <div class="item" style="border:0">

            <!-- Slide Background -->
            <img class="slide-image" src="{{ File::exists(public_path('img/plato/tikismikisPlato-'.$pl->id.'.jpg'))?url('/img/plato/tikismikisPlato-'.$pl->id.'.jpg'): url('/img/carta-restaurante.png') }}" alt="{{ 'TikismikisBar-'.$pl->nombre }}">
            <div class="bs-slider-overlay"></div>

            <div class="container">
                <div class="row">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <p data-animation="animated zoomInRight"><img src='{{ url('img/logo-dib-white.png') }}' width='10%'></p>
                        <h1 data-animation="animated fadeInLeft">{{ $pl->nombre }}</h1><br>
                        <a href="{{ url(Auth::user()?'/reserva':'/login-public')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>

                    </div>
                </div>
            </div>
        </div>
        @endif

       @if($cont%3==2)
        <div class="item" style="border:0">

            <!-- Slide Background -->
            <img class="slide-image" src="{{ File::exists(public_path('img/plato/tikismikisPlato-'.$pl->id.'.jpg'))?url('/img/plato/tikismikisPlato-'.$pl->id.'.jpg'): url('/img/carta-restaurante.png') }}" alt="{{ 'TikismikisBar-'.$pl->nombre }}">
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_center">
               <!-- <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>-->
                <p data-animation="animated zoomInRight"><img src='{{ url('img/logo-dib-white.png') }}' width='10%'></p>
                <h1 data-animation="animated lightSpeedIn">{{ $pl->nombre }}</h1><br>
                <a href="{{ url(Auth::user()?'/reserva':'/login-public')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>

            </div>
        </div>
       @endif
        @if($cont%3==0)
        <div class="item" style="border:0">

            <!-- Slide Background -->
            <img class="slide-image" src="{{ File::exists(public_path('img/plato/tikismikisPlato-'.$pl->id.'.jpg'))?url('/img/plato/tikismikisPlato-'.$pl->id.'.jpg'): url('/img/carta-restaurante.png') }}" alt="{{ 'TikismikisBar-'.$pl->nombre }}">
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_right">
               <!-- <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1> -->
                <p data-animation="animated zoomInLeft"><img src='{{ url('img/logo-dib-white.png') }}' width='10%'></p>
                <h1 data-animation="animated fadeInRight">{{ $pl->nombre }}</h1><br>
                <a href="{{ url(Auth::user()?'/reserva':'/login-public')}}" class="btn btn-lg btn-default">Haz tu reserva Online</a>
            </div>
        </div>
       @endif
        <?php $cont++ ?>
    @endforeach
    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> <!-- End  bootstrap-touch-slider Slider -->
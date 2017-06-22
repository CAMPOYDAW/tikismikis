<div class="carta-seccion">
    @php($cont2=0)
    @foreach($carta as $key=>$cat)
    @php($cont2++)
        <div id="ancla-{{ $cont2 }}"></div>
    <div class="one" style="padding:50px 0 50px 0;">
        <div class="standard_wrapper">
            <div class="page_content_wrapper">
                <div class="inner">
                    <div style="margin:auto;width:100%;text-align:center;">
                        <h2 class="ppb_menu_title">{{ $key }}</h2>
                        <br class="limpia"><br>
                        @php($cont=0)
                        @foreach($cat as $pl)
                        @php($cont++)
                        @if($cont%2!=0)
                        <div class="one_half ">
                        @else
                        <div class="one_half last">
                        @endif
                            <div class="menu_content_classic">
                                <h5 class="menu_post">
                                    <span class="menu_title">{{ $pl->nombre }}</span>
                                    <span class="menu_dots"></span>
                                    <span class="menu_price">{{ $pl->precio }} €</span>
                                </h5>
                                <div class="post_detail menu_excerpt">
                                    <img src="{{ url('img/alergenos/alergeno-crustaceo.png' ) }} " width="5%">
                                    / <img src="{{ url('img/alergenos/alergeno-gluten.png' ) }} " width="5%">
                                    / <img src="{{ url('img/alergenos/alergeno-soja.png' ) }} " width="5%">
                                </div>
                                <div class="menu_highlight">
                                    <i style="padding-right:0;padding-top:-25px" class="fa fa-star button" id="pop-{{ $pl->id }}" rel="popover" data-container="body" data-content="" title="{{ $pl->nombre }}" data-desc="{{ $pl->descripcion }}" data-fich="{{ File::exists(public_path('img/plato/tikismikisPlato-'.$pl->id.'.jpg'))?'tikismikisPlato-'. $pl->id.'.jpg ':'../carta-restaurante.png'}}">Ver ficha</i></div>

                            </div>
                        </div>

                        @endforeach
                    </div>

                    <br class="clear">

                </div>

            </div>

        </div>

    </div>
        @if ($cat != end($carta))
        @include('partials.navbar-carta')
        @endif
    @endforeach
</div>



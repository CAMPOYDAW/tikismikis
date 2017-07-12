<?php
$items=count($menus);
$divs=intval($items/3);
$ult_div=$items%3;
$cont=0;
?>
<script>
    var imgs=<?php echo  json_encode($imgs) ?>;

</script>
<div id="ancla-menus"></div>
<div class="limpia"></div>

<div id="menus">
    <div id="menus-head">
        <div class="row">
            <div class="col-sm-12">
                <img src="{{url('/img/logo.png')}}" width="30%">
            </div>
            <div class="col-sm-12">
                <h2>Ven a probar nuestros deliciosos y variados menús diarios acompañados de vino de la mejor calidad</h2>
            </div>
        </div>

    </div>
    <div class="limpia"></div>
    @if($items)
    <div class="container">


        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">


            <!-- Wrapper for slides -->
            <div class="carousel-inner" id="carousel-menus">
                @for ($i=0;$i<$divs;$i++)
                <div class="{{ $i==0?'item active':'item' }}">
                    <div class="row">
                        <div>
                        @for ($j=0;$j<3;$j++)
                        <div class="col-sm-4">
                            <img src="{{url('/img/menu-default.png')}}" alt="tikismikis-logo-menu" width="140" height="140">
                            <h2>{{ $menus[$cont]['title'] }}</h2>
                            <h3>{{ $menus[$cont]['fecha'] }}</h3>
                            <p> {{ $menus[$cont]['descripcion'] or '' }}</p>
                            <p>{!! $platos_menu[$menus[$cont]['id']] !!}</p>
                            <input type="hidden" value="{{ $menus[$cont]['onlyImg'] }}">
                        </div>
                        <?php $cont++?>
                        @endfor
                        </div>
                    </div>
                </div>
                @endfor

                @if($ult_div)
                <div class="{{ $divs==0?'item active':'item' }}">
                    <div class="row">
                        <div>
                        <div class="{{ $ult_div==1?'col-sm-4':'col-sm-2' }}" {!!  $ult_div==1?"style='background:none'":"" !!}></div>
                        <div class="col-sm-4">
                            <img src="{{url('/img/menu-default.png')}}" alt="tikismikis-logo-menu" width="140" height="140">
                            <h2>{{ $menus[$cont]['title'] }}</h2>
                            <h3>{{ $menus[$cont]['fecha'] }}</h3>
                            <p> {{ $menus[$cont]['descripcion'] or '' }}</p>
                            <p>{!!   $platos_menu[$menus[$cont]['id']] !!}</p>
							<input type="hidden" value="{{ $menus[$cont]['onlyImg'] }}">
                        </div>
                        @if($ult_div==2)
                        <?php $cont++ ?>
                        <div class="col-sm-4">
                            <img src="{{url('/img/menu-default.png')}}" alt="tikismikis-logo-menu" width="140" height="140">
                            <h2>{{ $menus[$cont]['title'] }}</h2>
                            <h3>{{ $menus[$cont]['fecha'] }}</h3>
                            <p> {{ $menus[$cont]['descripcion'] or '' }}</p>
                            <p>{!!   $platos_menu[$menus[$cont]['id']] !!}</p>
							<input type="hidden" value="{{ $menus[$cont]['onlyImg'] }}">
                        </div>
                        @endif
                        </div>
                    </div><!-- /.row -->
                </div>
                @endif


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
@endif

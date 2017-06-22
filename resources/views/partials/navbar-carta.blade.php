@php($cats=count($carta))
@php($divs=intval($cats/4)*4)
@php($ult_divs=$cats%4)
@php($cont=0)

<div id="navbar-carta">
 <div>
     <div class="row">

         @if($divs)
             @foreach($carta as $key=>$v)
                 @php($cont++)
                 @if($cont<=$divs)
                     <a class="ancla"  data-ancla="ancla-{{ $cont }}">
                     <div class="col-sm-3 menu-carta">
                         <p>{{ $key }}</p>
                     </div>
                     </a>
                 @endif
             @endforeach
         @endif
         @if($ult_divs)
             @php($cont=0)
             @foreach($carta as $key=>$v)
                 @php($cont++)
                 @if($cont>$divs)
                     <a class="ancla"  data-ancla="ancla-{{ $cont }}">
                         @if($ult_divs==1)
                        <div class="col-sm-12 menu-carta">
                     @elseif($ult_divs==2)
                        <div class="col-sm-6 menu-carta">
                    @else
                        <div class="col-sm-4 menu-carta">
                    @endif
                         <p>{{ $key }}</p>
                        </div>
                     </a>
                 @endif
             @endforeach
         @endif
     </div>
 </div>
</div>
                         <div class="limpia"></div>
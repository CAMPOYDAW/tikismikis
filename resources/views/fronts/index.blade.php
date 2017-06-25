
<script>

    var texts=<?php echo  json_encode($eventos) ?>;
    var textosPortada=[];
    textosPortada[0]=["<img src='{{ url('img/logo-rec-white.png') }}' width='80%'>",
        "", "Ven y disfruta de un sitio único en pleno de corazón de Elda. Disponemos de deliciosos platos elaborados con ingredientes de primera calidad así como de una extensa carta de vinos"
        ,"" ];
    for (var i=1;i<=texts.length;i++){
        textosPortada[i]=[texts[i-1]['title'],texts[i-1]['fecha'],texts[i-1]['descripcion'],texts[i-1]['destacar']];
    }

</script>
@extends('layouts.frontend')
@section('content')
    @include('partials.portada')

    @include('partials.menus')

    @include('partials.loginFront')


@endsection
@section('popup')
    @include('partials.pop_up_menu')
@endsection
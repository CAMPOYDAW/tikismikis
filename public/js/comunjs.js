$(document).ready(function () {
    $("a.bt").click(mostrar);
    $("#popupMenu>div>p").click(function(){
        $("#popupMenu .menu-lineas,.menu-precio").remove();
        $("#popupMenu .menu-titulo").html("");
        $('#popupMenu').fadeOut(1000);

    });

    $(".centro").niceScroll({
        cursorcolor:"#f8f8f8",
        zindex:"10",
        cursorborder:"1px solid #000",
        boxzoom:true,
        cursorwidth:"10"

    });
});


function mostrar(e){
    e.preventDefault();
    $(".centro").stop().animate({scrollTop:'0'},0);

    var url=window.location.pathname.split("/");

    var id=$(this).attr('data');
    if(url.length==4){
        var tit = $(this).parent().parent().children('h2').html();
        var onlyimg = $(this).parent().parent().children('input').val();
        if(onlyimg==1) onlyimg="SI";
    }else {
        var tit = $(this).parent().parent().children('.tit').html();
        var onlyimg = $(this).parent().parent().children('.sim').html();
    }
    var reg=$(this).attr('n_reg');
    var tipos=new Array();
    var textos=new Array();
    for (var i=1;i<=reg;i++){
        tipos[i]=$(this).attr('tipo'+i);
        textos[i]=$(this).attr('texto'+i);
    }
    var div=$('#popupMenu>div');
    var pvp=$(this).attr('pvp');
    if(reg<=5) $('#popupMenu .menu-titulo').css('margin-bottom','90px');
    if(reg<11 && reg>5) $('#popupMenu .menu-titulo').css('margin-bottom','70px');
    if(reg>=11) $('#popupMenu .menu-titulo').css('margin-bottom','30px');
    $("#popupMenu .menu-titulo").html(tit);
    var html="";
    for (var i=1;i<=reg;i++){
        html+="<div class='row menu-lineas'>";
        html+="<div class='col-md-1'></div>";
        html+="<div class='col-md-10 menu-"+tipos[i]+"'>";
        html+=textos[i];
        html+="</div>";
        html+=" <div class='col-md-1'></div> ";
        html+="</div>";
    }
    html+="<div class='row menu-precio'>";
    html+="PRECIO: "+pvp+" por persona";
    html+="</div>";
    $('#popupMenu .centro').show();
    if(onlyimg=="SI") $('#popupMenu .centro').hide();
    $('#popupMenu .centro').append(html);
    div.parent().fadeIn(1000);
    var hasimg=hasImg(id);
    if(url[url.length-2]=='public') {
        if (hasimg) {
            div.css({backgroundImage: "url('img/menu/tikismikisMenu-" + id + ".jpg')"});

        } else div.css({backgroundImage: "url('img/fondo-menu.png')"});
    }else{
        if (hasimg) {
            div.css({backgroundImage: "url('../img/menu/tikismikisMenu-" + id + ".jpg')"});

        } else div.css({backgroundImage: "url('../img/fondo-menu.png')"});
    }




}

function hasImg(id){
    hasimg=false;
    for(var i=0;i<imgs.length;i++){
        if(imgs[i]=="tikismikisMenu-"+id+".jpg" || imgs [i]=="tikismikisPlato-"+id+".jpg" || imgs [i]=="tikismikisEventos-"+id+".jpg"){
            hasimg=true;
            break;
        }
    }
    return hasimg
}



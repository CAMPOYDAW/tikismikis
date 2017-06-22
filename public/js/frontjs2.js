$(document).ready(function() {
    $('ul.nav.navbar-nav li').stop().animate({padding: "0"}, 700);
    $('ul.nav.navbar-nav').stop().animate({marginLeft: "0"}, 1000);
    $('.navbar-default img').stop().animate({marginTop: "0"}, 500);
    $('#portada,#login,#menus,#footer,body>nav,#eventos-seccion,.carta-seccion').delay(500).css("opacity", "1");
    $('#portada,#login,#menus,#footer,body>nav,#eventos-seccion,.carta-seccion').css("transition", "all 1s");

    $('').delay(1500).css("opacity","1");
    $('.menu-carta').hover(
        function () {
            $(this).stop().animate({fontSize: '24px'}, 300);
            $(this).css({border: '3px solid #980748'});
            $(this).css({backgroundColor: 'rgba(0,0,0,.5)'});
            $(this).css("transition", "all .5s");
        }, function () {
            $(this).stop().animate({fontSize: '0px'}, 50);
            $(this).css({border: 'none'});
            $(this).css({backgroundColor: 'transparent'});
        });
    $('.ancla').on('click', function (e) {
        e.preventDefault();
        var strAncla = '#' + $(this).data('ancla');
        $('html,body').animate({scrollTop: $(strAncla).offset().top - 100}, 1000);
    });



    $('i').hover(function(){
       var img =   $(this).attr('data-fich');
       var desc = $(this).attr('data-desc');
        $(this).popover({
            placement: 'left',
            content: "<img class='img-responsive' src='img/plato/" +img + "' alt='"+ $(this).attr('title') +"' ><p>" + desc + "</p>",
            html: true
        });

    },function(){

    });

    $("#blmenudeslizante a.active2").stop().animate({marginLeft:"0px"});

    $("#blmenudeslizante a").hover(
        function () {
            $($(this)).stop().animate({marginLeft:"0"},400);
        },
        function () {
            if($(this).attr('class')!="active2") {
                $($(this)).stop().animate({marginLeft: "-90px"}, 400);
            }
        }
    );
    $('#calendario').datepicker({
        language: "es",
        startDate:sumarDias(new Date(), 1),
    }).on('changeDate', function(event) {
        fr.fecha.value=event.format('dd/mm/yyyy');
        mostrarSubmit();
    });

    $(".npl button").click(function(){
        fr.comensales.value= $(this).html().trim();
        mostrarSubmit();
    });
    $("#more-pax-list select").on('change',function(){
        fr.comensales.value= $(this).val().trim();
        mostrarSubmit();
    });
    $(".hora_li button").on('click',function(){
        fr.hora.value= $(this).html().trim();
        mostrarSubmit();
    });


});

function sbmt(){
    this.submit;
    //return false;
}
function mostrarSubmit(){

    if(fr.fecha.value!="" && fr.comensales.value!="" && fr.hora.value!=""){
        $("button.sbmt").show()
    }else{
        $("button.sbmt").hide()
    }
}
/* Función que suma o resta días a una fecha, si el parámetro
 días es negativo restará los días*/
function sumarDias(fecha, dias){
    fecha.setDate(fecha.getDate() + dias);
    return fecha;
}

function hasImg(id){
    hasimg=false;
    for(var i=0;i<imgs.length;i++){
        if(imgs[i]=="tikismikisMenu-"+id+".jpg" || imgs [i]=="tikismikisPlato-"+id+".jpg"){
            hasimg=true;
            break;
        }
    }
    return hasimg
}

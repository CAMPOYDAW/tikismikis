
$(document).ready(function() {
   var url_page=window.location.pathname;
   // alert(url_page);
    $('select').select2();
    $("html, body").animate({ scrollTop: 0 });

    if(page!=''){
        var strAncla = '#ancla-' + page;
        $('html,body').animate({scrollTop: $(strAncla).offset().top-100}, 1200);
    }
    $('.ancla').on('click', function(e){
        e.preventDefault();
        var strAncla = '#' + $(this).data('ancla');
        $('html,body').animate({scrollTop: $(strAncla).offset().top-100}, 1000);
    });


    //$('body>nav').delay(500).animate({opacity:"1"},1000);
    $('#portada,body>nav').css("opacity","1");
    $('#login,#menus,#footer,#eventos-seccion').delay(1500).css("opacity","1");
    $('#portada,body>nav').css("transition","all 1s");
    $('#login,#menus,#footer').css("transition","all 2s");
    $('#logo-port').delay(1000).fadeIn(50);
    $('#logo-port img').animate({width:"100%"},3000,"easeOutElastic");
    $('.site-wrapper').delay(2000).animate({left:"50%"},2000,"easeOutElastic");
    $('ul.nav.navbar-nav li').hover(function(){
        var activo=$(this).parent().children('.active');
        $(activo).off();
        $(this).attr('class','active');
        //$(this).css("transition","all 0.4s");
    },function(){
        $(this).removeAttr('class');

    });
    if(textosPortada.length>1) {
        var contPortada = 1;
        setInterval(function () {
            $("#portada .site-wrapper").hide();
            $("#portada .site-wrapper").animate({left: "-5000px"}, 2);
            $("#portada .cover h2").html(textosPortada[contPortada][0]);
            $("#portada .cover h3").html(textosPortada[contPortada][1]);
            $("#portada .cover p:nth-child(3)").html(textosPortada[contPortada][2]);
            $("#portada .cover h4").html(textosPortada[contPortada][3]);
            $("#portada .site-wrapper").show(2000);
            //$("#portada .site-wrapper").animate({left: "50%"}, 2000, "easeInOutBounce");
            $("#portada .site-wrapper").animate({left: "50%"}, 2000);

            contPortada++;
            if (contPortada >= textosPortada.length) contPortada = 0;
        }, 12000);
    }



    if($(window).width()<1650){
        $('ul.nav.navbar-nav').stop().css("margin-left","0");
        $('ul.nav.navbar-nav li').stop().css('padding','0');
    }else{
        $('ul.nav.navbar-nav').stop().css("margin-left","-500px");
        $('ul.nav.navbar-nav li').stop().css('padding','0');
    }
    $(window).resize(function(){
        if($(window).width()<1650){
            $('ul.nav.navbar-nav').stop().css("margin-left","0");
        }else{
            $('ul.nav.navbar-nav').stop().css("margin-left","-500px");
        }
    });
    $('#new').click(function(){
        $('#form-register').stop().animate({left:'0'},250);
        $('#form-login').stop().animate({left:'-5000px'},250);
    });
    $('#log').click(function(){
        $('#form-login').stop().animate({left:'0'},250);
        $('#form-register').stop().animate({left:'-5000px'},250);
    });
    $(window).scroll(function () {
        var barra = $(window).scrollTop();
        var posicion = (barra * 0.3);
        var t=(50+posicion/4)+'%';
        var t2=(50+posicion/4)-50+'%';
     /*  $('#portada').css({
            'background-position': '0 +' +t2
        });*/
      /*  $('.row>div,#login').css({
            'background-position': '0 -' + posicion*0.5 + 'px'
        });

        var t2=(posicion/4)-30+'%';*/

        $('.site-wrapper').css(
            'top',t
        );
        /*
        $('.item .col-sm-4').css(
            'top',t2
        );*/
        if(barra>70){
            $("div#portada").stop().css("background-blend-mode","unset");
            $("div#portada").css("background-size","cover");
            $('.navbar-default').stop().css('height','100px');
            $('.navbar-default').stop().css('background-color','#980748');
            $('ul.nav.navbar-nav li a').stop().css('color','#bbaabb');
            $('.navbar-default').stop().css("position","fixed");
            if($(window).height()>500){
                $('ul.nav.navbar-nav li a').stop().animate({marginTop:'30px'},50);
            }

            $('ul.nav.navbar-nav li').stop().animate({padding:"0"},700);
            $('ul.nav.navbar-nav').stop().animate({marginLeft:"0"},1000);
            $('.navbar-default img').stop().animate({marginTop:"0"},500);
            if($(window).width()<375) {
                $('.navbar-default img').stop().animate({marginTop:"-50px"},500);
            }else{
                $('.navbar-default img').stop().animate({marginTop:"0"},500);
            }
        }else{
            $("div#portada").stop().css("background-blend-mode","color-dodge");

            $("div#portada").css("background-size","cover");
            $('.navbar-default').stop().css('height','50px');
            $('.navbar-default').stop().css('background-color','rgba(231,231,231,.5)');
            $('ul.nav.navbar-nav li a').stop().css('color','#fff');
            $('ul.nav.navbar-nav li a:hover').stop().css('color','#555 !important');
            $('.navbar-default').stop().css("position","absolute");
            $('ul.nav.navbar-nav li a').stop().animate({marginTop:'0'},50);
           // $('ul.nav.navbar-nav li').stop().animate({paddingLeft:'25px'},700);
           // $('ul.nav.navbar-nav li').stop().animate({paddingRight:'25px'},700);

            if($(window).width()>1650) {
                $('ul.nav.navbar-nav li').stop().css('paddingLeft','25px');
                $('ul.nav.navbar-nav li').stop().css('paddingRight', '25px');
                $('ul.nav.navbar-nav').stop().animate({marginLeft: '-500px'}, 1000);

            }
            $('.navbar-default img').stop().animate({marginTop:"-500%"},1000);

        }
        if(barra<$('#ancla-menus').offset().top-110){
            window.history.pushState("data", "Index",url_page);
            $('title').html('Tikismikis - portada');
        }
        if(barra>=$('#ancla-menus').offset().top-110 && barra<$('#ancla-login-public').offset().top-105){
            window.history.pushState("data", "Menus", "menus");
            $('title').html('Tikismikis - menús');
            $('ul.nav.navbar-nav li a[data-ancla=ancla-menus]').parent().attr('class','active');
        }else{

            $('ul.nav.navbar-nav li a[data-ancla=ancla-menus]').parent().removeAttr('class');

        }
        if(barra>=$('#ancla-login-public').offset().top-110){
            window.history.pushState("data", "Login", "login-public");
            $('title').html('Tikismikis - login');
            $('ul.nav.navbar-nav.navbar-right').find('li').attr('class','active');
            //$('nav navbar-nav navbar-right li').attr('class','active');
        }else{

            $('ul.nav.navbar-nav.navbar-right').find('li').removeAttr('class');

        }


    });


    $('nav .container a').click(function(){

        var $target = $($(this).data('target'));

        if(!$target.hasClass('in'))

            $('.container .in').removeClass('in').height(0);

    });
})

/**
 * Created by Campoy on 26/05/2017.
 */

$(document).ready(function () {
    clon=$("#foto").clone();


    if(id_im!=''){
        var url=window.location.pathname.split("/");
        if(hasImg(id_im)){
            if(url[url.length-1]=="menus"){
                  $("#img-form img").prop("src","../img/menu/tikismikisMenu-"+id_im+".jpg");
            }else if(url[url.length-1]=="carta"){
                    $("#img-form img").prop("src","../img/plato/tikismikisPlato-"+id_im+".jpg");
            }else if(url[url.length-1]=="eventos"){
                $("#img-form img").prop("src","../img/eventos/tikismikisEventos-"+id_im+".jpg");
            }

        }
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').bind('ajaxSend', function(elm, xhr, s) {
        if (s.type != 'GET') {
            xhr.setRequestHeader('X-CSRF-TOKEN', csrf_token);
        }
    });
    $("#tabla").tablesorter({
        dateFormat: 'dd/mm/yyyy'
    });
    $("#tabla2").tablesorter({
        dateFormat: 'dd/mm/yyyy'
    });
    $('.datepicker').datepicker({
        todayBtn: true,
        clearBtn: true,
        language: "es",
        todayHighlight: true,
        format:"dd/mm/yyyy",
        startDate:new Date(),
        //minDate: "-1D", maxDate: "+1M +10D"
    });
    $("#search").keyup(function(){
        // When value of the input is not blank
        if( $(this).val() != "")
        {
            // Show only matching TR, hide rest of them
            $("#tabla tbody>tr").hide();
            $("#tabla td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            // When there is no input or clean again, show everything back
            $("#tabla tbody>tr").show();
        }
    });
    $("#search2").keyup(function(){
        // When value of the input is not blank
        if( $(this).val() != "")
        {
            // Show only matching TR, hide rest of them
            $("#tabla2 tbody>tr").hide();
            $("#tabla2 td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            // When there is no input or clean again, show everything back
            $("#tabla2 tbody>tr").show();
        }
    });
    $( ".datepicker" ).keypress(function (evt) {  return false; });

    $('#f_error,input').click(function(){
        $('#f_error span').hide();
    });

    $('.select').select2({
        placeholder: "Selecciona un plato",
        allowClear: true,
    });

    $('#permanente').click(function(){

        if(document.getElementById("permanente").checked){
            $('#datepicker span,#datepicker input').val('');
            $('#datepicker span,#datepicker input').prop('disabled',true);
            $('#cuando').prop('disabled',false);
            $('#cuando').show();

        }else{
            $('#datepicker span,#datepicker input').prop('disabled',false);
            $('#cuando').val('');
            $('#cuando').prop('disabled',true);
            $('#cuando').hide();
        }
    });
    $('#soloImagen').click(function(){
        if(document.getElementById("soloImagen").checked){
            $("#lineas li").remove();
            $("#linea [type=button]").prop('disabled',true);
            $("#linea select").prop('disabled',true);
            $("#linea select option[value='']").prop('selected',true);
        }else{
            $("#linea [type=button]").prop('disabled',false);
            $("#linea select").prop('disabled',false);
        }
    });

    $(".btn-delete").click(borrar);


    $("#foto").change(function(){
        mostrarImagen(this);
    });
    $('#categorias').multiSelect();
    $(".pregunta").click(pregunta);

    $(".v-previa").hover(function(){

        var id=$(this).children('a').attr('data-id');
        $("#pop-"+id).show();
    },function(){
        var id=$(this).children('a').attr('data-id');
        $("#pop-"+id).hide();
    });

});
$.extend($.expr[":"], {
        "contains-ci": function(elem, i, match, array)
        {
            return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });


function borrar(e){

    e.preventDefault();
    var tabla=$(this).attr('tabla');
    if(tabla==undefined) tabla="menus/borrar";
    else if(tabla=="categorias") tabla="categorias/borrar";
    else if(tabla=="platos") tabla="platos/borrar";
    else if(tabla=="eventos") tabla="eventos/borrar";
    else if(tabla=="usuarios") tabla="usuarios/borrar"
    var id=$(this).attr('data');
    if(!confirm("Está apunto de borrar un registro--¿Continuar?")) return;
    $('#wait').show();
    $.post(tabla+'?'+ new Date().getTime(),{id:id},function(result){
        if(result.trim()!=''){
            $('#wait').hide();
        }else {
            if (tabla == "menus/borrar") {
                for (var i = 0; i < imgs.length; i++) {

                    if (imgs[i] == "tikismikisMenu-" + id + ".jpg") {
                        imgs.splice(i, 1);
                        break;
                    }
                }
            }
            $('#wait').hide();
            $("#f_ok span").html("Registro borrado").show(100);
            $("#f_ok span").delay(3000).hide(100);
            $("a[data=" + id + "]").parents('tr').remove();
        }
    }).fail(function(data,a,b){
        alert(data);
        alert(a);
        alert(b);
    });

}

function desactivar(el,id){
    var tabla=$(el).attr('tabla');
    var val=0;
    if(el.checked) val=1;
    $("#wait").show();
    if(tabla=='') tabla='menus/desactivar';
    else if (tabla=='categorias') tabla='categorias/desactivar';
    else if (tabla=='platos') tabla='platos/desactivar';
    else if (tabla=='eventos') tabla='eventos/desactivar';
    else if (tabla=='usuarios') tabla='usuarios/desactivar';
    $.post(tabla,{id:id,val:val},function(result) {
        $("#wait").hide();
        $("#f_ok").show(100);
        if(tabla=='menus/desactivar') tabla="Menú" ;
        else if(tabla=='categorias/desactivar') tabla='categoria';
        else if(tabla=='platos/desactivar') tabla="plato";
        else if(tabla=='eventos/desactivar') tabla="evento";
        else if(tabla=='usuarios/desactivar') tabla="usuario";
        if (val == 1) {
            $("#f_ok span").html(tabla+" desactivado").show(100);
            $("#f_ok span").delay(3000).hide(100);
            $(el).parent().children('span.glyphicon').prop('class', 'glyphicon glyphicon-ban-circle');
            $(el).parent().children('span.glyphicon').html('off');
        } else {
            $("#f_ok span").html(tabla+" activado").show(100);
            $("#f_ok span").delay(3000).hide(100);
            $(el).parent().children('span.glyphicon').prop('class', 'glyphicon glyphicon-ok-circle');
            $(el).parent().children('span.glyphicon').html('on');
        }
    }).fail(function(data){
        alert(data);
    });




}


function mostrarImagen(input) {

    if (input.files && input.files[0]) {
        var validateFile=document.getElementById("foto").files[0];
        if(validateFile.size>200000){
            $("#f_error span").show(100);
            $("#f_error span").html("Máximo tamaño de archivo 200Kb");
            cleanInputFile();
            return;
        }
        if(validateFile.type!="image/jpg" && validateFile.type!="image/jpeg"){
            $("#f_error span").show(100);
            $("#f_error span").html("Archivo de imagen en formato png");
            cleanInputFile();
            return;
        }

        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img_destino').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function cleanInputFile() {
    $("#foto").replaceWith(clon);
    clon = $("#foto").clone();
    $("#foto").change(function () {
        mostrarImagen(this);
    });
    var url=window.location.pathname.split("/")[4];
    if(url=="menus") {
        document.getElementById("img_destino").setAttribute("src", "../img/fondo-menu.png");
    }else if(url=="eventos"){
        document.getElementById("img_destino").setAttribute("src", "../img/fondo-eventos.jpg");
    }else document.getElementById("img_destino").setAttribute("src", "../img/carta-restaurante.png");
}
function confirmacion(resp){
    return confirm("Se va a "+ resp + " una reserva. ¿Confirma la operación");
}

function mandarEmail(el,id){
    if(!confirm("Se va a mandar un e mail del evento a cada uno de tus clientes. La operación puede tardar unos minutos. ¿Confirmar?")) return
    $("#wait").show();
    $.post('eventos/mail',{id:id},function(result) {
        $("#wait").hide();
        $("#f_ok").show(100);
        $("#f_ok span").html(tabla+" activado").show(100);
        $("#f_ok span").delay(3000).hide(100);
        $(el).parent().children('span.glyphicon').prop('class', 'glyphicon glyphicon-ok-circle');
        $(el).parent().children('span.glyphicon').html('on');

    }).fail(function(data){
        alert(data);
    });
}

function plato(item){
    if (item=="") return;
    if(item=="1") item="";
    element="<li class='list-group-item'><botton class='btn btn-xs btn-default' onclick='borrarInput(this)'>-</botton><input type='text' name='linea[]' value='"+item+"'><input type='hidden' name='tipo[]' value='linea'></li>";
    $("#lineas ul").append(element);
    $("#lineas").stop().animate({ scrollTop:$("#lineas").height()*1000 });

}

function separador(item){

    element="<li class='list-group-item' ><botton class='btn btn-xs btn-default' onclick='borrarInput(this)'>-</botton><input type='text' name='linea[]'><input type='hidden' name='tipo[]' value='separador'></li>";
    $("#lineas ul").append(element);
    $("#lineas").stop().animate({ scrollTop:$("#lineas").height()*1000 });
}
function borrarInput(item){
    item.parentNode.parentNode.removeChild(item.parentNode);
}

function edit_user(){
    if(document.getElementById("edit-user").style.display=="none"){
        $("#datos-user").hide();
        $("#edit-user").show();
    }else{
        $("#datos-user").show();
        $("#edit-user").hide();
    }
}

function edit_sets(set){
    if(document.getElementById("edit-"+set).style.display=="none"){
        $("#ver-"+set).hide();
        $("#edit-"+set).show();
    }else{
        $("#ver-"+set).show();
        $("#edit-"+set).hide();
    }
}

function validar(){
   if($('#categorias').val()) return true;
    $("#f_error span").html(" Debes de elegir por lo menos una categoría");
    $('#f_error span').show();
    return false
}

function pregunta(){
   var pr=$(this).attr('data-pregunta');
   var id=$(this).attr('data-id');
   $('#id').val(id);
   $('#row-submit').show();
   $('#admin-contacto .jumbotron').remove('class').prop('class','well pregunta');
   $(this).remove('class').prop('class','jumbotron');
   $('#pregunta').html(pr);
}


function NumCheck(e, field) {
    key = e.keyCode ? e.keyCode : e.which
    // backspace
    if (key == 8) return true
    // 0-9
    if (key > 47 && key < 58) {
        if (field.value == "") return true
        regexp = /.[0-9]{2}$/
        return !(regexp.test(field.value))
    }
    // .
    if (key == 46) {
        if (field.value == "") return false
        regexp = /^[0-9]+$/
        return regexp.test(field.value)
    }
    // other key
    return false

}


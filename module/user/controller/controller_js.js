$(document).ready(function() {
    console.log("ready");
    $('#table_crud').DataTable();
    $('body').on("click",".Button_blue", function() {
        var id = this.getAttribute('id');
        console.log(id);

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "module/user/controller/controller_user.php?op=read_modal&modal=" + id,
        })
        .done(function(data) {
            console.log("done");
            console.log(data);
                $('#user_modal').empty();
                $('<div></div>').attr('id','Div1').appendTo('#user_modal');
                
                $("#Div1").html(
                    '<br><span>Name:   <span id="name">'+data.name+'</span></span></br>'+
                    '<br><span>Pegi:   <span id="pegi">'+data.pegi+'</span></span></br>'+
                    '<br><span>Edition:     <span id="edition">'+data.edition+'</span></span></br>'+
                    '<br><span>Languages:     <span id="languages">'+data.languages+'</span></span></br>'
                )
                modal();
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud ha fallado: " +  textStatus + ", " + errorThrown);
            }
        });
    });
});

function modal(){
    $("#user_modal").show();
    $("#user_modal").dialog({
        width: 850, //<!-- ------------- ancho de la ventana -->
        height: 500, //<!--  ------------- altura de la ventana -->
        //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
        //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
        resizable: "true", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
        position: "down",
        modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        },
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
}
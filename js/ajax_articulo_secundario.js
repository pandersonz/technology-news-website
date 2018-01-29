var datos;
$(window).load(function() {
    $.ajax({																				   // incio petición
    type: "POST",																	    //Cuando se haya enviado un formulario
    url: "php/mostrar_articulo_secundario.php",														   //se invoca el archivo infoclientes.php												    //asigno el campo a la variable de peticion sql
    success: function(d){
        datos = JSON.parse(d);
    }
}).done(function() {												 //recibo el resulta
   $("#imgPS1").html("<img src='img/ar-000"+datos.idArticuloSec1+"/1.jpg' class='imgArtSecundaria'/>");
    $("#contentPS1").html("<h2>"+datos.tituloSec1+"</h2>");
    $("#imgPS2").html("<img src='img/ar-000"+datos.idArticuloSec2+"/1.jpg' class='imgArtSecundaria'/>")
    $("#contentPS2").html("<h2>"+datos.tituloSec2+"</h2>");
    $("#imgPS3").html("<img src='img/ar-000"+datos.idArticuloSec3+"/1.jpg' class='imgArtSecundaria'/>")
    $("#contentPS3").html("<h2>"+datos.tituloSec3+"</h2>");
    });
    })

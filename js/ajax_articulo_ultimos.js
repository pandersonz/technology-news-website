var datos;
$(window).load(function() {
    $.ajax({																				   // incio petición
    type: "POST",																	    //Cuando se haya enviado un formulario
    url: "php/mostrar_articulos_ultimos.php",														   //se invoca el archivo infoclientes.php												    //asigno el campo a la variable de peticion sql
    success: function(d){
        datos = JSON.parse(d);
    }
}).done(function() {												 //recibo el resulta
    $("#imgPU1").html("<img src='img/ar-000"+datos.idArticulo1+"/1.jpg' class='imgArtSecundaria'/>");
    $("#contentPU1").html("<h2>"+datos.titulo1+"</h2>");
    $("#imgPU2").html("<img src='img/ar-000"+datos.idArticulo2+"/1.jpg' class='imgArtSecundaria'/>")
    $("#contentPU2").html("<h2>"+datos.titulo2+"</h2>");
    $("#imgPU3").html("<img src='img/ar-000"+datos.idArticulo3+"/1.jpg' class='imgArtSecundaria'/>")
    $("#contentPU3").html("<h2>"+datos.titulo3+"</h2>");
    });
    })
var idPpal;
var tituloPpal;
var resumenPpal;
$(window).load(function() {
    $.ajax({																				   // incio petición
    type: "POST",																	    //Cuando se haya enviado un formulario
    url: "php/mostrar_articulo_ppal.php",														   //se invoca el archivo infoclientes.php												    //asigno el campo a la variable de peticion sql
    success: function(d){
        var a = JSON.parse(d);
        idPpal=a.idArticulo;
        tituloPpal = a.titulo;
        resumenPpal=a.resumen;
        //console.log(a);
    }
}).done(function() {												 //recibo el resulta
   $(".imgPortadaPpal").html("<img src='img/ar-000"+idPpal+"/1.jpg' id='imgPpal'/>")
    $(".contentPortadaPpal").html("<h2>"+tituloPpal+"</h2><h4>"+resumenPpal+"</h4>");
    });
    })

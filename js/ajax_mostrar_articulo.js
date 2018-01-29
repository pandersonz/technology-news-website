var contenido;
function traerArticulo(){
    $.ajax({																				   // incio petición
        type: "POST",																	    //Cuando se haya enviado un formulario
        url: "php/mostrar_articulo_por_id.php",	
        data:id=1,													   //se invoca el archivo infoclientes.php												    //asigno el campo a la variable de peticion sql
        success: function(d){
            var a = JSON.parse(d);
            contenido=a.contenido;
            //console.log(a);
        }
    }).done(function() {												 //recibo el resulta
       $(".content-c").html();
       $(".content-c").html(contenido);
        
    }) 
}

$(document).ready(function() {
    $('.mdb-select').materialSelect();
});


function registrarAuto() {
    // Función que Registra  un auto empleando ajax
    const data = $("#formRegistroAutos").serialize();
 
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
        url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
        success: function(respuesta) {
           respuesta = JSON.parse(respuesta); 
           if(respuesta.status){
               alert(respuesta.message)
           }else{
               alert(respuesta.message)
           }
        }
    });
}


function actualizarAuto() {
    // Función que Actualiza  un auto empleando ajax
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: $("#formActualizaAutos").serialize(), // Se toman todos los datos del formulario
        url: "actualizarAuto.php", // A donde se dirige para hacer el registro en la BD
        success: function(r) {
            console.log(r);
            
            if (r == 1) {
                alert("Actualizado");
            } else {
                alert("No Actualizado");
            }
        }
    });
}


function eliminar(placa) {
    var parametros = {
        "placa": placa,
    };
    // Función que Elimina  un auto empleando ajax
    $.ajax({
        type: "POST", // metodo por el cual se envian los datos
        data: parametros, // Se toman todos los datos del formulario
        url: "eliminaAutos.php", // A donde se dirige para hacer el registro en la BD
        success: function(r) {
            if (r == 1) {
                alert("Eliminado");
            } else {
                alert("No Eliminado");
            }
        }
    });
}

function listarRegiones(){
    $.ajax({
        url: "procesos/listarRegiones.php",
        type: "GET",
        success: function(r){
            $("#regiones").html(r);
        }
    });
}

function listarCargos(){
    $.ajax({
        url: "procesos/listarCargos.php",
        type: "GET",
        success: function(r){
            $("#candidatos").html(r);
        }
    });
}

$(document).on("change", "#regiones" ,function(){
    const postData = {
        id : $("#regiones").val()
    }

    $.ajax({
        url: "procesos/listarComunas.php",
        data: postData,
        type: "POST",
        success: function(r){

            $("#comunas").html(r);
        }
    })
})

function insertarDatos(){

    let nombreData = $("#nombre").val();
    let aliasData = $("#alias").val();
    let rutData = $("#rut").val();
    let emailData = $("#email").val();
    let regionData = $("#regiones").val();
    let comunaData = $("#comunas").val();
    let candidatoData = $("#candidatos").val();
    
    if (nombreData == ''){alert("Debe agregar su nombre");return false} 
    if (aliasData == ''){alert("Debe agregar su alias");return false} 
    if (rutData == ''){alert("Debe agregar su rut");return false} 
    if (emailData == ''){alert("Debe agregar su email");return false} 
    if (regionData == null){alert("Seleccione una región");return false} 
    if (comunaData == null){alert("Seleccione una comuna");return false} 
    if (candidatoData == null){alert("Seleccione un candidato");return false} 

    const postData = {
        nombre: nombreData,
        alias: aliasData,
        rut: rutData,
        email: emailData,
        region: $('select[name="regiones"] option:selected').text(),
        comuna: $('select[name="comunas"] option:selected').text(),
        candidato: $('select[name="candidatos"] option:selected').text(),
        medio: $("input[type=checkbox]:checked").val(),
    }

    $.ajax({
        url: "procesos/insertarDatos.php",
        data: postData,
        type: "POST",
        success: function(r){
            if (r==1) {
                $('#forminsert')[0].reset();
                alert("Datos guardados correctamente");
            }else{
                alert("Error, los datos no fueron guardados!");
            }
        }
    });

    return false;
}

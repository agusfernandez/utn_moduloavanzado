
//capturando el id email del register
$('#email').change(function (){
    $('.alert').remove();

    //levantar el email ingresado
    let email = $(this).val();
    //console.log('email', email);

    let datos = new FormData();
    datos.append('validarEmail', email);

    //peticion a ajax

    $.ajax({
        url: "ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            if(respuesta){
                //limpiamos el campo del email
                $('#email').val('');

                $('#email').parent('').after('<div class="alert alert-warning" role="alert">Error: El correo electronico ya existe en la base de datos, por favor ingrese otro email diferente</div>');
            }
        }

    })
})
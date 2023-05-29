$(document).ready(function(){
 
    //esta funcion es para validar la contraseña debe llevar punto y mayus
    jQuery.validator.addMethod("mayus", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[A-Z].*[.]$/.test( value );
      }, 'La primera letra es mayuscula y debe contener un punto al final');

      
$("#registro-for").validate({

    rules:{
        nombre:{
            required: true,
            minlength: 4
        },
        contra:{
            required: true,
            minlength: 6,
            mayus: true
        },
        correo:{
            required: true,
            email: true
        },
        telefono:{
            required: true,
            number: true,
            minlength: 8,
            maxlength: 10
        }
    },

    messages:{
        nombre:{
           required: "Este campo es requerdio",
           minlength: "Es necesario minimo 4 caracteres" 
        },
        contra:{
            required: "Por favor ingresa contraseña",
            minlength: "Minimo 6 caracteres"
        },
        correo:{
            required: "El correo es requerido",
            email: "El correo no es valido"
        },
        telefono:{
            required: "El telefono es obligatorio",
            number: "Solo acepta numeros numericos",
            minlength: "El numero debe tener minimo 8 caracteres",
            maxlength: "El numero no debe exceder de 10 caracteres"
        }
    }

});

});


//Esto es para validar los chebox llamados mediante el id

$('#Check').change(function(){

if($(this).is(":checked")){
    document.getElementById("nueva_").disabled = false;
    document.getElementById("nueva_").required = true;
}else{
    document.getElementById("nueva_").disabled = true;
    document.getElementById("nueva_").value = "";
    document.getElementById("nueva_").required = false;
}

});

$('#check_el').change(function(){

if($(this).is(':checked')){
    document.getElementById("block_uno").disabled = false;
    document.getElementById("block_dos").disabled = false;

}else{
    document.getElementById("block_uno").disabled = true;
    document.getElementById("block_dos").disabled = true;
    document.getElementById("block_uno").value = "";
    document.getElementById("block_dos").value = "";
}

});




// esta parte es para actualizar y reflejar los datos de la tabla de perfil

$('#guardar').click(function(){
    

    var recolectar = $('#cambiar').serialize();

    $.ajax({
        url: '../php/actualizar.php',
        type: 'POST',
        data: recolectar,

        success:function(vs){
            if(vs == 1){
                alertify.success("Datos actualizados");
                $('#tabla_user').load('../Nav/cliente.php #tabla_user');
                $ ('#mod_per').modal('hide');
            
            }else if(vs == 2){
                alertify.success("Contraseña y datos actualizados");
                $('#tabla_user').load('../Nav/cliente.php #tabla_user');
                $ ('#mod_per').modal('hide');
            }else{
                alertify.error("la contraseña no es correcta");
            }
            
            
            
        }
    })


});
<?php 

require_once('./conexion.php');
require_once('./main.php');

$tipoDoc = $_POST['tipodocumento'];
$documento = limpiar_cadena($_POST['documento']);
$nombres = limpiar_cadena($_POST['nombres']);
$apellidos = limpiar_cadena($_POST['apellidos']);
$correo = limpiar_cadena($_POST['email']);
$usuario = limpiar_cadena($_POST['usuario']);
$clave_1 = limpiar_cadena($_POST['clave_1']);
$clave_2 = limpiar_cadena($_POST['clave_2']);
$rol = $_POST['tiporol'];

$errores = array();

if($tipoDoc == "Seleccione una Opcion"){
    $errores['tipodoc'] = "Por favor seleccione una opcion!";
}

$_SESSION['errores'] = $errores;

// if(verificar_datos("[0-9]{3,20}",$documento)){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>DOCUMENTO</strong> no cumple con los paramteros exijidos!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }

// if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$nombres)){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>NOMBRE</strong> no cumple con los paramteros exijidos!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }

// if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$apellidos)){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 Los <strong>APELLIDOS</strong> no cumple con los paramteros exijidos!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }

// if(verificar_datos("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$usuario)){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>USUARIO</strong> no cumple con los paramteros exijidos!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }



// if($rol == "Seleccione una Opcion"){
//     $rol = "administrador";
// }

// if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
    
//     $sql = "SELECT * FROM usuarios WHERE correo_usuario = '$correo'; ";
//     $check_email = mysqli_query($db, $sql);

//     if($check_email && mysqli_num_rows($check_email)==1){
//         echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>CORREO</strong> ingresado ya se encuentra registrado!
//             </div>
//         </div>`;
//     </script>";
//     exit();
//     }


// }else{
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>CORREO</strong> no es valido!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }



// if($clave_1 =! $clave_2){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al Registrarse</p>
//             </div>
//             <div class='message-body'>
//                 Las <strong>CONTRASEÑAS</strong> no coinciden!
//             </div>
//         </div>`;
//     </script>";
//     exit();

// }else{
//     $clave= password_hash($clave_1 ,PASSWORD_BCRYPT,["cost"=>10]);
// }

// //GUARDAR DATOS

// $sql = "INSERT INTO usuarios VALUES(NULL,'$tipoDoc','$documento','$nombres','$apellidos','$correo','$usuario','$clave','$rol');";
// $guardar = mysqli_query($db, $sql);

// if($guardar){
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-success'>
//             <div class='message-header'>
//                 <p>Registro Exitoso!</p>
//             </div>
//             <div class='message-body'>
//                 El <strong>USUARIO</strong> ha sido creado correctamente!
//             </div>
//         </div>`;
//     </script>";
// }else{
//     echo
// 	"<script>
//         const alerta = document.querySelector('.alerta-registro');
//         alerta.innerHTML =  `
//         <div class='message is-danger'>
//             <div class='message-header'>
//                 <p>Error al registrar!</p>
//             </div>
//             <div class='message-body'>
//                 Ha ocurrido un <strong>ERROR</strong> comunicate con soporte!
//             </div>
//         </div>`;
//     </script>";
//     exit();
// }


header('location:index.php?vista=perfil');
?>
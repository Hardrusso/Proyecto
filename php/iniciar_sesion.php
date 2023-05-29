<?php 

require_once('./php/conexion.php');

$usuario = limpiar_cadena($_POST['login_usuario']);
$clave = limpiar_cadena($_POST['login_clave']);

if($usuario == "" ){
    alertaLogin('El','USUARIO',$usuario);
    exit();
}

if($clave == "" ){
    alertaLogin('La','CONTRASEÑA',$clave);
    exit();
}


$sql = "SELECT * FROM usuarios WHERE usuario_usuario = '$usuario' AND clave_usuario = '$clave';";
$login = mysqli_query($db,$sql);

if($login && mysqli_num_rows($login)==1){

    $datos = mysqli_fetch_assoc($login);

        $_SESSION['usuario'] = $datos;

}else{
    alertaLogin(null,'CONTRASEÑA o USUARIO',$clave);
    exit();
}

$login=null;
header('location:./index.php?vista=home');

?>
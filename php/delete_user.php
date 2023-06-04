<?php 

require_once('conexion.php');
require('main.php');

$user = limpiar_cadena($_POST['usuario_del']);
$clave = limpiar_cadena($_POST['confirm_clave']);

$id = $_SESSION['usuario']['id_usuario'];

$sql_User = "SELECT * FROM usuarios WHERE id_usuario = $id ;";
$check = mysqli_query($db, $sql_User);

if($check && mysqli_num_rows($check)==1){
    $datos_user = mysqli_fetch_assoc($check);
}

$check_clave = password_verify($clave, $datos_user['clave_usuario']);


if($check_clave){

    if($id == $datos_user['id_usuario']){

        $sqlDel = "DELETE FROM usuarios WHERE id_usuario = $id AND usuario_usuario = '$user';";
        $delete = mysqli_query($db, $sqlDel);

        if($delete){
            echo "
            <script>
            alert('El usuario se elimino con exito');
            location.href = '../index.php?vista=login';
            </script>
            ";
            
        }
    }

}else{
    $_SESSION['errorClave'] = "
    <div class='message-header'>
        <p>Error de autenticación</p>
    </div>
    <div class='message-body'>
        La <strong>CONTRASEÑA </strong> no es la correcta!
    </div>
    ";
    header('location:../index.php?vista=perfil');
}

mysqli_close($db);

?>
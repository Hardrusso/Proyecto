<?php 

function actualizarDatos($sesion,$conexion){

    $id_user = $sesion['id_usuario'];

    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_user;";
    $consulta = mysqli_query($conexion, $sql);

    if($consulta && mysqli_num_rows($consulta)==1){
        $resultado = $consulta;
    }

    return $resultado; 

}


?>
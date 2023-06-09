<?php 
require_once('conexion.php');
require_once('main.php');

$id_usuario = limpiar_cadena($_POST['usuario']);
$nombre = limpiar_cadena($_POST['nombre_aprendiz']);
$apellido = limpiar_cadena($_POST['apellido_aprendiz']);
$tipodoc = limpiar_cadena($_POST['tipodocumento']);
$documento = limpiar_cadena($_POST['documento_aprendiz']);
$correo = limpiar_cadena($_POST['correo_aprendiz']);
$celular = limpiar_cadena($_POST['cel_aprendiz']);
$titulada = limpiar_cadena($_POST['titulada']);





$sql = "INSERT INTO aprendices VALUES (null,'$id_usuario','$titulada','$tipodoc','$documento','$nombre','$apellido','$correo','$celular',1);";
$execute = mysqli_query($db, $sql);





?>
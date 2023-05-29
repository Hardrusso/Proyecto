<?php


function verificar_datos($filtro,$cadena){

    if(preg_match("/^".$filtro."$/",$cadena)){
        return false;
    }else{
        return true;
    }
}

function limpiar_cadena($cadena){
    $cadena = trim($cadena);      // la funcion trim elimina espacios en blanco del inicio o al final de la cadena
    $cadena = stripcslashes($cadena);  //stripcslashes quita las barras de un string con comillas escapadas
    $cadena = str_ireplace("<script>", " " ,$cadena); //reemplaza un texto mediante una busqueda, esta version es incensible para mayusculas y minusculas
    //aqui esta reemplazando los primeros parametros por espacios vacios...Esto se usa para evitar inyeccion SQL
    $cadena = str_ireplace("</script>", " " ,$cadena); 
    $cadena = str_ireplace("<script src", "", $cadena);
    $cadena = str_ireplace("<script type=", "", $cadena);
    $cadena = str_ireplace("SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("INSERT INTO", "", $cadena);
    $cadena = str_ireplace("DROP TABLE", "", $cadena);
    $cadena = str_ireplace("DROP DATABASE", "", $cadena);
    $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
    $cadena = str_ireplace("SHOW TABLES;", "", $cadena);
    $cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
    $cadena = str_ireplace("<?php", "", $cadena);
    $cadena = str_ireplace("?>", "", $cadena);
    $cadena = str_ireplace("--", "", $cadena);
    $cadena = str_ireplace("^", "", $cadena);
    $cadena = str_ireplace("<", "", $cadena);
    $cadena = str_ireplace("[", "", $cadena);
    $cadena = str_ireplace("]", "", $cadena);
    $cadena = str_ireplace("==", "", $cadena);
    $cadena = str_ireplace(";", "", $cadena);
    $cadena = str_ireplace("::", "", $cadena);
    return $cadena;
}

function renombrar_fotos($nombre){
	
	$nombre = str_ireplace(" ","_",$nombre);
	$nombre = str_ireplace("/","_",$nombre);
	$nombre = str_ireplace("#","_",$nombre);
	$nombre = str_ireplace("-","_",$nombre);
	$nombre = str_ireplace("$","_",$nombre);
	$nombre = str_ireplace(".","_",$nombre);
	$nombre = str_ireplace(",","_",$nombre);

	$nombre = $nombre."_".rand(0,100); //la funcion rand seleccion un numero aleatorio entre los parametros dados en este caso es de 0 a 100
	return $nombre;
}

#funcion paginador de tablas#cap 14
function paginador_tablas($pagina,$Npaginas,$url,$botones){
	$tabla ='<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';

	//FUNCION PARA EL BOTON ANTERIOR
	if($pagina <= 1){
		$tabla.='<a class="pagination-previous is-disabled" disabled>Anterior</a>
		<ul class="pagination-list">
		';
	}else{
		$tabla.='<a class="pagination-previous" href="'.$url.($pagina-1).'">Anterior</a>
		<ul class="pagination-list">
		<li><a class="pagination-link" href="'.$url.'1">1</a></li>
		<li><span class="pagination-ellipsis">&hellip;</span></li>
		';
	}

	//funcion para los botones del medio
	$ci=0;
	for($i=$pagina; $i<=$Npaginas; $i++){

		if($ci>=$botones){
			break;
		}

		if($pagina==$i){
			$tabla.='<li><a class="pagination-link is-current" href="'.$url.$i.'">'.$i.'</a></li>';

		}else{
			$tabla.='<li><a class="pagination-link" href="'.$url.$i.'">'.$i.'</a></li>';
		}
		$ci++;
	}

	//FUNCION PARA EL BOTON SIGUIENTE
	if($pagina == $Npaginas ){
		$tabla.='
		</ul>
		<a class="pagination-next is-disabled" disabled>Siguiente</a>
		<ul class="pagination-list">
		';
	}else{
		$tabla.='
		<li><span class="pagination-ellipsis">&hellip;</span></li>
		<li><a class="pagination-link" href="'.$url.$Npaginas.'">'.$Npaginas.'</a></li>
		</ul>
		<a class="pagination-next is-disabled" disabled href="'.$url.($pagina+1).'">Siguiente</a>
		';
	}

	$tabla.='</nav>';
	return $tabla;
}


function alertaLogin($indicador,$campo,$ingresado){

	if($campo == "USUARIO"){
		$ingresado = "no esta definido ";
	}else{
		$ingresado = "no esta definida ";
	}
	echo
	"<script>
        const alerta = document.querySelector('.alerta');
        alerta.innerHTML =  `
        <div class='message is-danger'>
            <div class='message-header'>
                <p>Error al iniciar sesion</p>
            </div>
            <div class='message-body'>
                $indicador <strong>$campo </strong>$ingresado o no existe!
            </div>
        </div>`;
    </script>";
}

function mostrarAlerta($errores,$parametro){
	$alerta = "";
	$alerta = "<p class='error'>". $errores[$parametro]."</p>";
	return $alerta;
}
?>
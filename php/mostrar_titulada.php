<?php 

$idTitulada = limpiar_cadena($_POST['id_titulada']);
$sql = "SELECT * FROM tituladas WHERE id_titulada = $idTitulada;";
$guardar = mysqli_query($db, $sql);

$datos = mysqli_fetch_all($guardar, MYSQLI_ASSOC);
    foreach($datos as $dato){
        echo' <input class="input" type="text" value="'.$dato['nombre_titulada'].'" disabled>
        <input type="hidden" type="text" name="titulada" value="'.$dato['id_titulada'].'">
    </div>
    </div>

    <div class="column">
    <div class="control">
            <label class="label">Ficha titulada:</label>
            <input class="input" type="text" value="'.$dato['ficha_titulada'].'" disabled>
        </div>
    </div>
    ';
    }
?>
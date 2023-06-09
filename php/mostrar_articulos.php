<?php 

$idArticulo = limpiar_cadena($_POST['id_articulos']);
$sql = "SELECT id_articulo,nombre_articulo_1, nombre_articulo_2, CONCAT(serial_articulo_1,''serial_articulo_2) AS 'seriales' FROM articulos WHERE id_articulo = $idArticulo;";
$execute = mysqli_query($db, $sql);

$datosArticulos = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    foreach($datosArticulos as $rows{
        echo' 
                    <input class="input" type="text" value="'.$rows['nombre_articulo_1'].'" disabled>
                    <input type="hidden" type="text" name="articulos" value="'.$rows['id_articulo'].'">
                </div>
            </div>

            <div class="column">
            <div class="control">
                <label class="label">Nombre articulo 2</label>
                <input class="input" type="text" value="'.$rows['nombre_articulo_2'].'" disabled>
            </div>
        </div>
        <div class="column">
            <div class="control">
                <label class="label">Serial de articulos</label>
                <input class="input" type="text" value="'.$rows['seriales'].'" disabled>
            </div>
        </div>
    </div>
    ';
    }
?>
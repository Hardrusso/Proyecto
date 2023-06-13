<?php 
require_once('conexion.php');
require_once('main.php');


$documento = limpiar_cadena($_POST['consulta']);

if(empty($documento)){
    echo "Introduce documento de aprendiz";
    die();
}

if(is_numeric($documento)){
    
    $sql = "SELECT a.*, art.nombre_articulo, art.nombre_articulo_2 FROM aprendices a 
    INNER JOIN articulos art ON a.id_articulo = art.id_articulo 
    WHERE documento = $documento;";
    $execute = mysqli_query($db, $sql);

    if(mysqli_num_rows($execute)==1){

        
    $datos = mysqli_fetch_assoc($execute);
        $id_registro = $datos['id_aprendiz'];

        date_default_timezone_set('America/Bogota');
        $fechaActual = date("Y-m-d"); // Obtiene la fecha actual en formato 'YYYY-MM-DD'
        $horaActual = date("H:i:s"); // Obtiene la hora actual en formato 'HH:MM:SS'

        $insercion = "INSERT INTO registro VALUES(null, $id_registro,'$fechaActual','$horaActual');";
        $execute_insercion = mysqli_query($db, $insercion);
    ?>

        <article class="panel-heading mb-3"> 
            <div class="is-flex">
                <p class="" >Datos del aprendiz</p>
            </div>
                <h3 class="is-size-6 mt-2"></h3>     
        </article>

        <div class="mt-3">
            <div class="columns box mb-5">

                <div class="column p-0">
                    <h1 class="title is-6 m-0">No Documento </h1>
                    <p class="is-size-6 mt-2"><?= $datos['documento'];?></p>
                </div>

                <div class="column p-0">
                    <h1 class="title is-6 m-0">Nombre Completo</h1>
                    <p class="is-size-6 mt-2"><?= $datos['nombre_aprendiz'].' '.$datos['apellido_aprendiz'];?></p>
                </div>
            </div>
        </div>

        <article class="panel-heading mb-3"> 
            <div class="is-flex">
                    <p class="" >Articulos del aprendiz</p>
            </div>
                <h3 class="is-size-6 mt-2"></h3>     
        </article>

        <div class="mt-3">
            <div class="columns box mb-5">
                <div class="column p-0">
                    <h1 class="title is-6 m-0">Articulo 1</h1>
                    <p class="is-size-6 mt-2"><?= $datos['nombre_articulo'];?></p>
                </div>
                <div class="column p-0">
                    <h1 class="title is-6 m-0">Codigo 1</h1>
                    <p class="is-size-6 mt-2"><?= $datos['serial_articulo_1']; ?></p>
                </div>

                <div class="column p-0">
                    <h1 class="title is-6 m-0">Descripcion 1</h1>
                    <p class="is-size-6 mt-2"><?= $datos['descrpcion_articulo_1'];?></p>
                </div>
            </div>
        </div>
        <div>
            <div class="columns box mb-5">
                <div class="column p-0">
                    <h1 class="title is-6 m-0">Articulo 2</h1>
                    <p class="is-size-6 mt-2"><?= $datos['nombre_articulo_2'];?></p>
                </div>
                <div class="column p-0">
                    <h1 class="title is-6 m-0">Codigo 2</h1>
                    <p class="is-size-6 mt-2"><?= $datos['serial_articulo_2']; ?></p>
                </div>

                <div class="column p-0">
                    <h1 class="title is-6 m-0">Descripcion 2</h1>
                    <p class="is-size-6 mt-2"><?= $datos['descrpcion_articulo_2'];?></p>
                </div>
            </div>
        </div>

        <div class="">
            <a class="button is-link" href="../php/nuevo_registro.php">Nuevo registro</a>
        </div>


    <?php }else{
        echo "no se encontraron resultados";
    }?>


<?php }else{
echo "formato no definido";
}?>
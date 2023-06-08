<div class="container box" id="buscador">
<form method="POST" autocomplete="off" class="mb-3" id="form-tituladas">
    <div class="is-flex">
        <label for="buscar_titulada" class="label mr-4">Buscar:</label>
        <a class="delete" aria-label="close"></a>
    </div>
    <div class="is-flex">
        <input type="text" name="busqueda" class="input" id="">
        <button type="submit" name="enviar" class="button is-link title is-6 ml-4">buscar</button>
    </div>
</form>  

<table class="table is-bordered">
    <thead>
        <tr class="has-text-centered">
            <th></th>
            <th>#</th>
            <th>Nombre Titulada</th>
            <th>Ficha titulada</th>
            <th>jornada</th>
        </tr>
    </thead>
    <tbody>

<?php
$where = "";

if(isset($_POST['enviar'])){
    $busqueda = $_POST['busqueda'];

    if(isset($_POST['busqueda']) && $_POST['busqueda'] == ""){?>

        <tr class="has-text-centered">
        <td colspan="5">Introduce un termino de busqueda</td>
        </tr>

    <?php }else{
        $where = " WHERE nombre_titulada LIKE '%".$busqueda."%' OR ficha_titulada LIKE '".$busqueda."' ORDER BY nombre_titulada ASC";

    $contador = 1; 
    
    $resultado = obtenerDatos($db,'tituladas',$where); 
    if(mysqli_num_rows($resultado)>0){

        while($datos = mysqli_fetch_array($resultado)):

        ?>
            <tr>
                <th><input type="checkbox" name="seleccionado" class="checkbox" id="aqui"></th>
                <td><?=$contador?></td>
                <td><?=$datos['nombre_titulada'];?></td>
                <td><?=$datos['ficha_titulada'];?></td>
                <td><?=$datos['jornada'];?></td>
            </tr>
        <?php  
        $contador++;
        endwhile; 

    }else{?>
        <tr class="has-text-centered">
            <td colspan="5">No se encontraron resultados</td>
        </tr>
    <?php }
    }
}?>
</tbody>
</table>
<button type="submit" class="button is-success title is-6" id="select">Seleccionar</button>
</div>




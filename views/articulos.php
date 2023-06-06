<article class="panel-heading mb-5"> 
    <div class="is-flex">
            <h3 class=" is-size-2 " >ARTICULOS</h3>
    </div>
        <p class="is-size-5">
            Articulos registrados!
        </p>     
</article>

<div class="tabs is-centered is-boxed">
    <ul>
        <li>
            <a href="index.php?vista=articulo_nuevo">
                <span>AGREGAR</span>
            </a>
        </li>

        <li class="is-active">
            <a href="index.php?vista=articulos">
                <span>LISTA ARTICULOS</span>
            </a>
        </li>

        <li >
            <a href="index.php?vista=buscar_articulo">
                <span>BUSCAR</span>
            </a>
        </li>
    </ul>
</div>

<?php 
$resultado = obtenerDatos($db,'articulos');

foreach ($resultado as $datos){
?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre Articulo 1</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Nombre Articulo 2</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Fecha Registro</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $datos['id_articulo']?></td>
            <td><?= $datos['nombre_articulo_1']?></td>
            <td><?= $datos['serial_articulo_1']?></td>
            <td><?= $datos['descripcion_articulo_1']?></td>
            <td><?= $datos['nombre_articulo_2']?></td>
            <td><?= $datos['serial_articulo_2']?></td>
            <td><?= $datos['descripcion_articulo_2']?></td>
            <td><?= $datos['fecha']?></td>
        </tr>
    </tbody>
</table>
<?php } ?>
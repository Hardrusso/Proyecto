    <article class="panel-heading"> 
            <div class="is-flex">
                <h3 class=" is-size-2" >BIENVENIDOS</h3>
            </div>
            <p class="is-size-6 ">
                Estimado usuario, este es un sistema de inventario para que lleves el control de tus productos!
            </p>     
        </article>
        <?php
            $totalAprendiz = obtenerRegistros($db,'aprendices','id_aprendiz',null);
            $totalUsuarios = obtenerRegistros($db,'usuarios','id_usuario',$_SESSION['usuario']['id_usuario']);
            $totaltitulada = obtenerRegistros($db,'tituladas','id_titulada',null);
            $totalarticulo = obtenerRegistros($db,'articulos','id_articulo',null);
        ?>

    <?php $datos_user = actualizarDatos($_SESSION['usuario'], $db);
        if(!empty($datos_user)):
        while($datos = mysqli_fetch_assoc($datos_user)):

    ?>

        <div class="panel_iconos is-flex is-justify-content-space-around is-align-content-center"><!--Abrimos un contenedor para los botones de navegacion-->
            <a href="index.php?vista=perfil" class="iconos has-text-centered"> <!-- Inicia etiqueta 'a' para referenciar que es un link -->
                <h2 class="title is-5">PERFIL</h2> <!-- Crea un encabezado de nivel 2 -->
                <p class="is-size-5 pb-4"><?= $datos['nombre_usuario'] ?> </p> <!-- Creamos un párrafo-->
            </a> <!-- Cierra la etiqueta 'a' -->

            <a href="index.php?vista=usuarios_lista" class="iconos has-text-centered">
                <h2 class="title is-5">USUARIOS</h2>
                <i class='bx bxs-user-account bx-lg mb-3'></i>
                <p class="is-size-5 pb-4"><?= $totalUsuarios; ?> Registrados</p>
                
            </a>
            <a href="index.php?vista=aprendices_lista" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">APRENDICES</h2>
                <p class="is-size-5"><?= $totalAprendiz; ?> Registrados</p>
            </a>
            <a href="index.php?vista=tituladas_lista" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">TITULADAS</h2>
                <p class="is-size-5"><?= $totaltitulada; ?> Registrados</p>
            </a>
            <a href="index.php?vista=articulos" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">ARTICULOS</h2>
                <p class="is-size-5"><?= $totalarticulo; ?> Registrados</p>
            </a>
        </div><!--cerramos contenedor para los botones de navegacion-->

        <?php endwhile;
            endif; ?>



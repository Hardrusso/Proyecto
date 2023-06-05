    <article class="panel-heading"> 
            <div class="is-flex">
                <h3 class=" is-size-2" >BIENVENIDOS</h3>
            </div>
            <p class="is-size-6 ">
                Estimado usuario, este es un sistema de inventario para que lleves el control de tus productos!
            </p>     
        </article>

    <?php $datos_user = actualizarDatos($_SESSION['usuario'], $db);
        if(!empty($datos_user)):
        while($datos = mysqli_fetch_assoc($datos_user)):

    ?>

        <div class="panel_iconos is-flex is-justify-content-space-around is-align-content-center"><!--Abrimos un contenedor para los botones de navegacion-->
            <a href="index.php?vista=perfil" class="iconos has-text-centered"> <!-- Inicia etiqueta 'a' para referenciar que es un link -->
                <h2 class="title is-5">PERFIL</h2> <!-- Crea un encabezado de nivel 2 -->
                <p class="is-size-5 pb-4"><?= $datos['nombre_usuario'] ?> </p> <!-- Creamos un párrafo-->
            </a> <!-- Cierra la etiqueta 'a' -->

            <a href="nav/usuarios.html" class="iconos has-text-centered">
                <h2 class="title is-5">USUARIOS</h2>
                <i class='bx bxs-user-account bx-lg mb-3'></i>
                <p class="is-size-5 pb-4">10 Registrados</p>
                
            </a>
            <a href="./nav/productos.html" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">ARTICULOS</h2>
                <p class="is-size-5">4 Registrados</p>
            </a>
            <a href="nav/devoluciones.html" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">APRENDICES</h2>
                <p class="is-size-5">7 Devoluciones</p>
            </a>
            <a href="nav/empresa.html" class="iconos has-text-centered">
                <h2 class="titulo_productos title is-5">OTROS</h2>
                <p class="is-size-5">Conocenos</p>
            </a>
        </div><!--cerramos contenedor para los botones de navegacion-->

        <?php endwhile;
endif; ?>
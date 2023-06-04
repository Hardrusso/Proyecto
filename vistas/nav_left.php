<?php require_once('./php/helper.php'); ?>
    <div class="container_nav"><!--Abrimos un contenedor para la parte del navegador que esta a la izquierda-->
    <div class="py-6 cont_user"><!--se abre un contenedor para agregar una imagen y unos titulos-->
        <img class="img_user" src="./images/user.png" alt="" >
        <h3 class="title is-4 has-text-centered mb-0 has-text-white"> <?= $_SESSION['usuario']['usuario_usuario']; ?> </h3>
        <h4 class="is-size-6 has-text-centered has-text-white"><?= $_SESSION['usuario']['rol_usuario']; ?></h4>
    </div>


    <div class=""><!--Abrimos un contenedor para los botones de navegacion-->
        <nav class="nav">
            <a class="nav_a" href="index.php?vista=home"><i class='bx bx-home-alt bx-sm pr-2'></i>Home</a>
            <a class="nav_a" href="index.php?vista=perfil"><i class='bx bx-user bx-sm pr-2'></i>Perfil</a>
            
                <div class="drop1"><!--Abrimos un contenedor para el primer dropdown -->
                <p class="drop_title"><i class='bx bxs-user-account bx-sm pr-2'></i>Usuarios
                    <span>
                    <i class='bx bx-chevron-down bx-sm drop_arrow'></i>
                    </span>
                </p>
                <div class="drop_list">
                    <a href="index.php?vista=usuarios_lista"><i class='bx bxs-spreadsheet bx-sm pr-2'></i>lista Usuarios</a>
                    <a href="index.php?vista=usuario_nuevo"><i class='bx bx-plus bx-sm pr-2'></i>Nuevo Usuario</a>
                </div>
                </div>

                <div class="drop1"><!--Abrimos un contenedor para el segundo dropdown -->
                <p class="drop_title_product"><i class='bx bx-package bx-sm pr-2'></i>Articulos
                    <span>
                    <i class='bx bx-chevron-down bx-sm drop_arrow2'></i>
                    </span>
                </p>
                <ul class="drop_list_product">
                    <a href="./nav/productos.html"><i class='bx bxs-spreadsheet bx-sm pr-2'></i>Lista Articulos</a>
                    <a href="./nav/agregar_productos.html"><i class='bx bx-plus bx-sm pr-2'></i>Nuevo articulo</a>
                </ul>
                </div>
                </div>
            
            <a class="nav_a" href="nav/devoluciones.html"><i class='bx bx-repost bx-sm pr-2'></i></i>Aprendices</a>
            <a class="nav_a" href="nav/empresa.html"><i class='bx bx-building-house bx-sm pr-2'></i>Otros</a>
        </nav>
    </div>
</div>
<div class="contenedor_derecha pl-5"><!--Abrimos un contenedor para la parte de la derecha-->
<div class="panel_arriba is-align-items-center mt-3 mb-4">
            <img src="./images/boton-left.png" id="ocultar" class="button is-small is-info" alt="">
            <a href="./php/logout.php" class="button has-text-centered is-danger"><img src="./images/log-out.png" class="boton pr-2" alt="">Cerrar Sesion</a>
        </div>
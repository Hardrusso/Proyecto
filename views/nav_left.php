    <?php ob_start() ?>
    <div class="container_nav"><!--Abrimos un contenedor para la parte del navegador que esta a la izquierda-->
    <div class="py-6 cont_user"><!--se abre un contenedor para agregar una imagen y unos titulos-->
        <img class="img_user" src="./images/user.png" alt="" >
        <h3 class="title is-4 has-text-centered mb-0 has-text-white"> <?=$_SESSION['usuario']['usuario_usuario'];?> </h3>
        <h4 class="is-size-6 has-text-centered has-text-white"><?=$_SESSION['usuario']['rol_usuario'];?></h4>
        
    </div>
    
    <div class=""><!--Abrimos un contenedor para los botones de navegacion-->
        <nav class="nav">
            <a class="nav_a" href="index.php?vista=home">Home</a>
            <a class="nav_a" href="index.php?vista=perfil">Perfil</a>
            
                <div class="drop1"><!--Abrimos un contenedor para el primer dropdown -->
                <p class="drop_title">Usuarios
                    <span>
                    </span>
                </p>
                <div class="drop_list">
                    <a href="index.php?vista=usuarios_lista">lista Usuarios</a>
                    <a href="index.php?vista=usuario_nuevo"></i>Nuevo Usuario</a>
                </div>
                </div>

                <div class="drop1"><!--Abrimos un contenedor para el segundo dropdown -->
                <p class="drop_title_product">Articulos
                    <span>
                    </span>
                </p>
                <ul class="drop_list_product">
                    <a href="index.php?vista=articulos">Lista Articulos</a>
                    <a href="index.php?vista=articulo_nuevo">Nuevo articulo</a>
                </ul>
                </div>
                </div>
            
            <a class="nav_a" href="index.php?vista=aprendices_lista">Aprendices</a>
            <a class="nav_a" href="index.php?vista=tituladas_lista">Tituladas</a>
        </nav>
    </div>
</div>
<div class="contenedor_derecha pl-5"><!--Abrimos un contenedor para la parte de la derecha-->
<div class="panel_arriba is-align-items-center mt-3 mb-4">
            <img src="./images/boton-left.png" id="ocultar" class="button is-small is-info" alt="">
            <a href="./php/logout.php" class="button has-text-centered is-danger"><img src="./images/log-out.png" class="boton pr-2" alt="">Cerrar Sesion</a>
        </div>
        
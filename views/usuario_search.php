<article class="panel-heading"> 
        <div class="is-flex">
            <h3 class="is-size-2">
            BUSCAR USUARIO
            </h3>
        </div>

        <p class="is-size-6">
            Recuerda que puedes buscar el usuario por nombres o numero de documento!
        </p>     

    </article>

    <div class="tabs is-centered is-boxed">
    <ul>
        <li >
            <a href="index.php?vista=usuario_nuevo">
                <span>AGREGAR</span>
            </a>
        </li>

        <li >
            <a href="index.php?vista=usuarios_lista">
                <span>LISTA USUARIOS</span>
            </a>
        </li>

        <li class="is-active" href="index.php?vista=usuario_search">
            <a>
                <span>BUSCAR</span>
            </a>
        </li>
    </ul>
    </div>

    

    <?php 
    if(!isset($_GET['page'])){
        $pagina = 1;
    }else{
        $pagina = (int)$_GET['page'];

        if($pagina <= 1){
            $pagina = 1;
        }
    }

    $pagina = limpiar_cadena($pagina);
    $url = "index.php?vista=usuario_search&page=";  //esta variable va a contener la url completa del sistema de la tabla
    $registros = 10;                               // esta va a mostrar el numero total de registrados en cada pagina
    $busqueda = "";                                //esta variable se va a usar para realizar la busqueda

    require('./php/lista_user.php');
?>

<?php require_once('./includes/header.php');?>

<section class="contenedor is-flex"><!--Abrimos un contenedor para toda la pagina mostrada y le damos propiedad flex-->

<?php 

if(!isset($_GET['vista']) || $_GET['vista'] == ""){

    $_GET['vista']='login';
}

if(is_file('./vistas/'.$_GET['vista'].'.php') &&  $_GET['vista'] != 'login'){

    include('./vistas/nav_left.php');
    include('./vistas/'.$_GET['vista'].'.php');
    include('./includes/script.php');

}else{

    if($_GET['vista']=='login'){
        
        include('vistas/login.php');
    }else{
        include('vistas/404error.php');
    }
}
?>

<?php require_once('vistas/footer.php'); ?>



</section><!--cerramos toda la section-->

</body>
</html>
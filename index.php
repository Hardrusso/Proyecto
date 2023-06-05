<?php require_once('./includes/header.php');?>

<section class="contenedor is-flex"><!--Abrimos un contenedor para toda la pagina mostrada y le damos propiedad flex-->

<?php 

if(!isset($_GET['vista']) || $_GET['vista'] == ""){

    $_GET['vista']='login';
}

if(is_file('./views/'.$_GET['vista'].'.php') &&  $_GET['vista'] != 'login'){

    include('./views/nav_left.php');
    include('./views/'.$_GET['vista'].'.php');
    include('./includes/script.php');

}else{

    if($_GET['vista']=='login'){
        
        include('views/login.php');
    }else{
        include('views/404error.php');
    }
}
?>

<?php require_once('views/footer.php'); ?>



</section><!--cerramos toda la section-->

</body>
</html>
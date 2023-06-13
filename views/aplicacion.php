<?php require_once('../php/main.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresos</title>
    <link rel="stylesheet" href="../css/bulma.min.css">
</head>
<body>
    <div class="cont-login">

    <div class="box">
        <form action="" method="POST" autocomplete="off" id="form-login">
            <div class="field">
                <label class="label"><img src="../images/person-icon.svg" alt="">Documento</label>
                <div class="control">
                <input class="input" type="text" placeholder="# Documento" name="consulta" >
                </div>
            </div>

            <button type="submit" class="btn-ingresar button is-success">Ingresar</button>
        </form>

    <?php if(isset($_POST['consulta'])){
        require_once('../php/cosulta_aplicacion.php');
    } ?>
    </div>
</div>
</body>
</html>
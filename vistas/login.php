<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/bulma.min.css">
</head>
<body>
    <div class="cont-login">
        <div class="alerta mb-6"></div>
    <div class="box">
        

        <div class="logos-login">
            <img class="logoPai" src="images/producto.png" alt="logo SACI"><img class="logoSena" src="images/logoSena.png" alt="">
        </div>

        <form action="" method="POST" autocomplete="off" >
            <div class="field">

                <label class="label"><img src="images/person-icon.svg" alt="">Usuario</label>
                <div class="control">
                <input class="input" type="text" placeholder="Usuario" name="login_usuario" id="login_usuario"  maxlength="20" >
                
                </div>
            </div>

            <div class="field">
                <label class="label"><img src="images/candado-icon.svg" alt="">Contraseña</label>
                <div class="control">
                    <input class="input" type="password" placeholder="Contraseña" name="login_clave" id="contraseña"  maxlength="100" >
                </div>
            </div>
            
            <button type="submit" class="btn-ingresar button is-success">Ingresar</button>
        </form>

    <?php if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
        require_once('./php/main.php');
        require_once('./php/iniciar_sesion.php');
    } ?>
    </div>
</div>
</body>
<script src="./js/ajax.js"></script>
</html>
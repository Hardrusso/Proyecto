<article class="panel-heading mb-5"> 
    <div class="is-flex">
            <h3 class=" is-size-2 " >Nuevo Aprendiz</h3>
    </div>
        <p class="is-size-5">
            Completa el formulario para registrar el nuevo aprendiz
        </p>     
</article>

<div class="tabs is-centered is-boxed">
    <ul>
        <li class="is-active">
            <a href="index.php?vista=aprendiz_nuevo">
                <span>AGREGAR</span>
            </a>
        </li>

        <li >
            <a href="index.php?vista=aprendices_lista">
                <span>LISTA USUARIOS</span>
            </a>
        </li>

        <li >
            <a href="index.php?vista=aprendiz_search">
                <span>BUSCAR</span>
            </a>
        </li>
    </ul>
</div>

    <?php if(isset($_SESSION['registrado'] )): ?>

        <div class='message is-success'>
        <?= $_SESSION['registrado'] ; ?>
        </div>

    <?php elseif (isset($_SESSION['errorRegistro'])):?>
        <div class='message is-danger'>
        <?= $_SESSION['errorRegistro'] ; ?>
        </div>
    <?php endif; ?>
    


<form action="./php/guardar_aprendiz.php" class="box" autocomplete="off" id="form_aprendiz"  method="POST">

    <div class="columns">
        <div class="column">
            <label class="label">Usuario de quien registra:</label>
            <input class="input" type="text" name="documento" value="<?= $_SESSION['usuario']['usuario_usuario']?>" disabled>
            <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']['id_usuario']?>">
        </div>
        
        <div class="column">
            <div class="control">
                <label class="label">Nombres</label>
                <input class="input" type="text" name="nombre_aprendiz" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Ingresa el nombre del aprendiz">
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'documento'):"" ?>
        </div>
        <div class="column">
            <div class="control">
                <label class="label">Apellidos</label>
                <input class="input" type="text" name="apellido_aprendiz" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Ingresa el apellido del aprendiz">
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'nombres'):"" ?>
        </div>
    </div>

    <div class="columns">
        <div class="column">
        <label for="tipoDoc" class="label">Tipo de Documento</label>
            <div class="control select">
                <select name="tipodocumento">
                <option value="">Seleccione una Opcion</option>
                <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                <option value="TarjetaDeIdentidad">Tarjeta de Identidad</option>
                <option value="CedulaExtranjera">Cedula Extranjera</option>
                </select>
            </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label"># Documento</label>
                    <input class="input" type="text" name="documento_aprendiz" pattern="[0-9]{3,20}" placeholder="Numero de Documento">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'correo'):"" ?>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Correo</label>
                    <input class="input" type="email" name="correo_aprendiz" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,40}" placeholder="Ingresa email">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'usuario'):"" ?>
            </div>
    </div>
    
    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Celular</label>
                    <input class="input" type="text" name="cel_aprendiz" pattern="[0-9]{3,20}" placeholder="Ingresa # celular">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'contraseña'):"" ?>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Titulada: <a class="tag is-success" id="modal-tituladas" data-target="modal_buscar_titulada">Buscar</a></label>
                    <input class="input" type="text" value="" disabled>
                    <input type="hidden" type="text" name="titulada">
                </div>
            </div>

            <div class="column">
            <div class="control">
                    <label class="label">Ficha titulada:</label>
                    <input class="input" type="text" value="" disabled>
                </div>
            </div>

    </div>
        <div class="has-text-centered my-4">
            <button class="button is-success px-5 title is-6" type="submit" value="Registrar"><img src="./images/save.png" alt="" class="mr-2">Registrar</button>
        </div>

</form>    
<?php BorrarErrores(); ?>

<!-- ### SECCION PARA BUSCAR TITULADAS ### -->

    <?php include('./php/modal_tituladas.php'); ?>

<!-- ### SECCION SE TERMINA LA SECCION  ### -->
<script src="./js/funcion_select_tituladas.js"></script>
<script src="./js/val_form_registro_aprendiz.js"></script>

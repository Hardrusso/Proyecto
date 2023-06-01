<article class="panel-heading mb-5"> 
    <div class="is-flex">
        <h3 class=" is-size-2 has-text-success-dark mb-3" >INFORMACION PERSONAL</h3>
    </div>
    <p class="is-size-5 has-text-dark">
        <?= $_SESSION['usuario']['nombre_usuario'];?> Aqui puedes ver o editar tu perfil.
    </p>     
</article>


<div class="">
    <div class="columns box mb-5">
        <div class="column">
            <div class="control">
                <h1 class="title is-5">Tipo de Documento</h1>
                <p class="is-size-5"><?= $_SESSION['usuario']['tipoDoc_usuario'];?></p>
            </div>
        </div>

        <div class="column">
            <div class="control">
                <h1 class="title is-5">No Documento </h1>
                <p class="is-size-5"><?= $_SESSION['usuario']['documento_usuario'];?></p>
            </div>
        </div>
    </div>

    <div class="columns box mb-5">
        <div class="column">
            <div class="control">
                <h1 class="title is-5">Nombres</h1>
                <p class="is-size-5"><?= $_SESSION['usuario']['nombre_usuario'];?></p>
            </div>
            </div>

            <div class="column">
                <div class="control">
                    <h1 class="title is-5">Apellidos</h1>
                    <p class="is-size-5"><?= $_SESSION['usuario']['apellido_usuario'];?></p>
                </div>
            </div>
    </div>
    
    <div class="columns box mb-5">
        <div class="column">
            <div class="control">
                <h1 class="title is-5">Correo</h1>
                <p class="is-size-5"><?= $_SESSION['usuario']['correo_usuario'];?></p>
            </div>
        </div>

        <div class="column">
            <div class="control">
                <h1 class="title is-5">Usuario</h1>
                <p class="is-size-5"><?= $_SESSION['usuario']['usuario_usuario'];?></p>
            </div>
        </div>
    </div>
    <div class="is-flex is-justify-content-space-between">
        <button type="submit" class="button is-link px-6 title is-6 js-modal-trigger" data-target="modal_update_perfil"><img src="./images/user_detail.png" class="mr-2">Editar Perfil</button>
        <button type="submit" class="button is-danger is-outlined px-5 title is-6" >Eliminar</button>
    </div>
</div>

<!-- ESTE ES EL MODAL PARA LA ACTUALIZACION DEL PERFIL VA UNIDO AL BOTON EDITAR PERFIL -->
<div class="modal" id="modal_update_perfil" >
    <div class="modal-background"></div>
    <div class="modal-card" id="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Ediatr Perfil</p>
            <button class="delete" aria-label="close"></button>
        </header>
            <section class="modal-card-body" >

<!-- Contenido del modal-->

<form action="./php/guardar_usuario.php" class="box" autocomplete="off" id="registro-for"  method="POST">

    <div class="columns">
        <div class="column">
            <label for="tipoDoc" class="label">Tipo de Documento</label>
            <div class="control select">
                <select name="tipodocumento">
                <option value="">Seleccione una Opcion</option>
                <option value="Cedula">Cedula de Ciudadania</option>
                <option value="TarjetaDeIdentidad">Tarjeta de Identidad</option>
                <option value="CedulaExtranjera">Cedula Extranjera</option>
                </select>
            </div>
        </div>
        
        <div class="column">
            <div class="control">
                <label class="label">Documento de Identidad</label>
                <input class="input" type="text" name="documento" pattern="[0-9]{3,20}" value="<?= $_SESSION['usuario']['documento_usuario'];?>">
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'documento'):"" ?>
        </div>
        <div class="column">
            <div class="control">
                <label class="label">Nombres</label>
                <input class="input" type="text" name="nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" value="<?= $_SESSION['usuario']['nombre_usuario'];?>">
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'nombres'):"" ?>
        </div>
    </div>

    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Apellidos</label>
                    <input class="input" type="text" name="apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" value="<?= $_SESSION['usuario']['apellido_usuario'];?>">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'apellidos'):"" ?>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Email</label>
                    <input class="input" type="email" name="email" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" value="<?= $_SESSION['usuario']['correo_usuario'];?>">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'correo'):"" ?>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Usuario</label>
                    <input class="input" type="text" name="usuario" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,40}" value="<?= $_SESSION['usuario']['usuario_usuario'];?>">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'usuario'):"" ?>
            </div>
    </div>
    
    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Contraseña</label>
                    <input class="input" type="password" name="clave_1" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,80}" placeholder="Ingresa tu contraseña">
                </div>
                <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'contraseña'):"" ?>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Confirmar Contraseña</label>
                    <input class="input" type="password" name="clave_2" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,80}" placeholder="Confirma tu contraseña">
                </div>
            </div>
            <div class="column">
            <label for="rol" class="label">Rol</label>
                <div class="control select ">
                    <select name="tiporol">
                    <option value="">seleccione una opcion</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Celador">Celador</option>
                    </select>
                </div>
            </div>
    </div>
</form>    
<?php BorrarErrores(); ?>


<!-- se acaba el contenido del modal -->

        </section>
        <footer class="modal-card-foot">
            <button type="submit" class="button is-success">Guardar</button>
            <button class="button is-danger">Cancelar</button>
        </footer>
    </div>
</div>

<!-- SE ACABA LA SECCION DEL MODAL -->


<script src="./js/modal_perfil.js"></script>



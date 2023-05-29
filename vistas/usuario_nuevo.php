<article class="panel-heading mb-5"> 
    <div class="is-flex">
        <i class="fa-solid fa-users fa-2xl pt-5"></i>
            <h3 class="has-text-grey is-size-2 " >Nuevo usuario</h3>
    </div>
        <p class="is-size-5 has-text-weight-light">
            Completa el formulario para registrar el nuevo usuario
        </p>     
</article>

<form action="./php/guardar_usuario.php" class="box" autocomplete="off" id="registro-for"  method="POST">

    <div class="columns">
        <div class="column">
            <label for="tipoDoc" class="label">Tipo de Documento</label>
            <div class="control select">
                <select name="tipodocumento">
                <option>Seleccione una Opcion</option>
                <option>Cedula de Ciudadania</option>
                <option>Tarjeta de Identidad</option>
                <option>Cedula Extranjera</option>
                </select>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'tipodoc'):"" ?>
        </div>
        
        <div class="column">
            <div class="control">
                <label class="label">Documento de Identidad</label>
                <input class="input" type="text" name="documento" pattern="[0-9]{3,20}" placeholder="Ingresa tu numero de documento">
            </div>
        </div>
        <div class="column">
            <div class="control">
                <label class="label">Nombres</label>
                <input class="input" type="text" name="nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{3,40}" placeholder="Escribe tu nombre">
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Apellidos</label>
                    <input class="input" type="text" name="apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{3,40}" placeholder="Escribe tus apellidos">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Email</label>
                    <input class="input" type="email" name="email" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]{3,40}" placeholder="Ingresa tu correo">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Usuario</label>
                    <input class="input" type="text" name="usuario" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]{6,40}" placeholder="Define tu usuario">
                </div>
            </div>
    </div>
    
    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Contraseña</label>
                    <input class="input" type="password" name="clave_1" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]{6,40}" placeholder="Ingresa tu contraseña">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Confirmar Contraseña</label>
                    <input class="input" type="password" name="clave_2" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,40}" placeholder="Confirma tu contraseña">
                </div>
            </div>
            <div class="column">
            <label for="rol" class="label">Rol</label>
            <div class="control select ">
                <select name="tiporol">
                <option>seleccione una opcion</option>
                <option>Administrador</option>
                <option>Celador</option>
                </select>
            </div>
    </div>
    </div>
        <div class="has-text-centered my-4">
            <input class="button is-success title is-6" type="submit" value="Registrar">
        </div>

</form>    

<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery_validate.js"></script>
<script src="js/funciones.js"></script>
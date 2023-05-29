<article class="panel-heading mb-5"> 
    <div class="is-flex">
        <i class="fa-solid fa-users fa-2xl pt-5"></i>
            <h3 class="has-text-grey is-size-2 " >Nuevo usuario</h3>
    </div>
        <p class="is-size-5 has-text-weight-light">
            Completa el formulario para registrar el nuevo usuario
        </p>     
</article>

<form action="./php/guardar_usuario.php" class="box is-flex" autocomplete="off" method="POST">

<div class="has-text-centered mr-6">
    <img class="img_user" src="./images/user.png" alt="">
    <div class=""><input type="file" name="" id=""></div>
</div>

<div class="container">
    <div class="columns">
        <div class="column">
            <label for="tipoDoc" class="label">Tipo de Documento</label>
            <div class="control select">
                <select name="tipDoc">
                <option value="Cedula">Cedula de Ciudadania</option>
                <option value="tarjetaIdentidad">Tarjeta de Identidad</option>
                <option value="CedulaExtrajera">Cedula Extranjera</option>
                </select>
            </div>
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
                <input class="input" type="text" name="nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Escribe tu nombre">
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Apellidos</label>
                    <input class="input" type="text" name="apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Escribe tus apellidos">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Email</label>
                    <input class="input" type="text" name="email" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Ingresa tu correo">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Usuario</label>
                    <input class="input" type="text" name="nombre" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Define tu usuario">
                </div>
            </div>
    </div>
    
    <div class="columns">
        <div class="column">
                <div class="control">
                    <label class="label">Contraseña</label>
                    <input class="input" type="text" name="apellidos" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Ingresa tu contraseña">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label class="label">Confirmar Contraseña</label>
                    <input class="input" type="text" name="email" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" placeholder="Confirma tu contraseña">
                </div>
            </div>
            <div class="column">
            <label for="rol" class="label">Rol</label>
            <div class="control select ">
                <select name="Rol">
                <option value="administrador">Administrador</option>
                <option value="Celador">Celador</option>
                </select>
            </div>
    </div>
    </div>
        <div class="has-text-centered my-4">
            <button class="button is-success title is-6 py-5" type="submit">REGISTRAR</button>
        </div>
</div>
</form>        
    
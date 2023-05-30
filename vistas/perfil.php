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
        <button type="submit" class="button is-link px-6 title is-6"><img src="./images/user_detail.png" class="mr-2">Editar Perfil</button>
        <button type="submit" class="button is-danger is-outlined px-5 title is-6" >Eliminar</button>
    </div>
</div>



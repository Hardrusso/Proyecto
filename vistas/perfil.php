        <article class="panel-heading"> 
            <div class="is-flex">
                <i class="fa-solid fa-users fa-2xl pt-5"></i>
                <h3 class="has-text-grey is-size-2 " >HOLA!</h3>
            </div>
            <p class="is-size-5 has-text-weight-light">
                <?= $_SESSION['usuario']['nombre_usuario'].' '.$_SESSION['usuario']['apellido_usuario'];?>
            </p>     
        </article>

        <form action="" class="box is-flex is-justify-content-space-around ">
            <div class="formulario_foto mx-5">
                <img class="img_user" src="../images/user.png" alt="">
                <div class=""><input type="file" name="" id=""></div>
            </div>
            <div class="formulario_datos">
            <div class="is-flex py-4">
            <div class="field mr-5">
                <label class="label">DOCUMENTO</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Ingrese su documento de identidad" autocomplete="off" value="Documento del Usuario">
                </div>
            </div>
            <div class="field mr-5">
                <label class="label">NOMBRES</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Escriba sus nombres" autocomplete="off" value="Nombres del Usuario">
                </div>
            </div>
            <div class="field mr-5">
                <label class="label">APELLIDOS</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Escriba sus apellidos" autocomplete="off" value="Apellidos del Usuario">
                </div>
            </div>
        </div>
    
        <div class="is-flex py-4">
            <div class="field mr-5">
                <label class="label">TELEFONO</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Digite su numero de contacto" autocomplete="off" value="Contacto del Usuario">
                </div>
            </div>
            <div class="field mr-5">
                <label class="label">DIRECCION</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Direccion completa" autocomplete="off" value="Residencia del Usuario">
                </div>
            </div>
            <div class="field mr-5">
                <label class="label">Ciudad</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Municipio/Departamento" autocomplete="off" value="Yopal - Casanare">
                </div>
            </div>
            </div>
            <div class="has-text-centered my-4"><button class="button is-info title is-6 py-5" type="submit"><i class='bx bx-save bx-sm pr-1'></i>GUARDAR CAMBIOS</button></div>
        </div>
        
        </form>



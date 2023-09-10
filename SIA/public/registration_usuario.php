<?php
include('vista/superior.php');
?>
    <!--Cuerpo de la pagina-->
    <main>
        <h1 class="title">Usuario</h1> <!--Titulo de la Pagina-->
        <!--Seccion de crear un nuevo item-->
        <section class="cuadrado">
            <h2 class="sub_title">Crear un nuevo usuario </h2>
            <form action="../controlador/register_usuario.php" method="post">
            <!-- <div class=""> -->
                <div class="field">
                    <label for="ID_Vendedor" class="col-form-label">N. Documento :</label>
                    <input id="ID_Vendedor" type="text" class="form-control" placeholder="" name="ID_Vendedor" required>
                    <div id="mensajeError" style="display: none; color: red; margin-top: 10px;"></div>
                </div>
                <div class="field"> <!--Nombre-->
                    <label for="Nombres" class="col-form-label">Nombres :</label>
                    <input type="text" class="form-control" placeholder="" name="Nombres"  required>
                </div>
                <div class="field"> <!--Precio Unitario-->
                    <label for="Apellidos" class="col-form-label">Apellidos :</label>
                    <input type="text" class="form-control" placeholder="" name="Apellidos"  required>
                </div>
                <div class="field"> <!--Unidad-->
                    <label for="Mobile" class="col-form-label">Telefono :</label>
                    <input type="text" class="form-control" placeholder="" name="Mobile" required>
                </div>
                <div class="field"> <!--Stock-->
                    <label for="Email" class="col-form-label">Email :</label>
                    <input type="email" class="form-control" placeholder="" name="Email" required>
                </div>
                <div class="field"> <!--Stock-->
                    <label for="username" class="col-form-label">Usuario :</label>
                    <input type="text" class="form-control" placeholder="" name="Username" required>
                </div>
                <div class="field"> <!--Stock-->
                    <label for="username" class="col-form-label">Contraseña :</label>
                    <input type="password" class="form-control" placeholder="" name="Password" required>
                </div>
            <!-- </div> -->
            <!-- <div class="modal-footer"> -->
                    <a type="button" class="btn btn-light" onclick="history.back()" data-dismiss="modal">Cancelar</a>
                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            <!-- </div> -->
            </form>
            
        </section>
    </main>
    <?php
include('vista/inferior.php');
?>

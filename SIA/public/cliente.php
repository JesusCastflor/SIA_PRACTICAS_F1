<?php
include('vista/superior.php');
?>
    <!--Cuerpo de la pagina-->
    <main>
        <h1 class="title">Clientes</h1> <!--Titulo de la Pagina-->
        <!--Seccion de crear un nuevo item-->
        <section class="cuadrado">
            <h2 class="sub_title">Crear un nuevo cliente </h2>
            <form action="../controlador/register_cliente.php" method="post">
                <div class="field"> <!--Nombre-->
                    <label>Nombres</label>
                    <input type="text" name="nombres_cliente" required placeholder="Nombres">
                </div>
                <div class="field"> <!--Precio Unitario-->
                    <label>Apellidos</label>
                    <input type="text" name="apellidos_cliente" required placeholder="Apellidos">
                </div>
                <div class="field"> <!--Unidad-->
                    <label>Telefono</label>
                    <input type="number" name="telefono_cliente" required placeholder="Telefono">
                </div>
                <div class="field"> <!--Stock-->
                    <label>Email</label>
                    <input type="email" name="email_cliente" required placeholder="Email">
                </div>
                <div class="field"> <!--Stock-->
                    <label>Tipo de documento</label>
                    <input type="number" name="Tipo_Documento" required placeholder="DNI">
                </div>
                <div class="field"> <!--Stock-->
                    <label>RUC</label>
                    <input type="number" name="ID_Cliente" required placeholder="RUC">
                </div>
                <div class="field"> <!--Stock-->
                    <label>Razon Social</label>
                    <input type="text" name="razon_cliente" required placeholder="Razon Social">
                </div>
                <a type="button" class="btn btn-light" onclick="history.back()" data-dismiss="modal">Cancelar</a>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </form>
        </section>
        <!--Seccion de las tablas de items-->
        <section class="cuadrado" id="cuadradov2">
            <h2 class="sub_title"> Historial de Clientes </h2>
            <form>
                <div class="field"> <!--Stock-->
                    <label>RUC</label>
                    <input type="number" name="ruc_cliente" required placeholder="RUC">
                </div>
            </form>
        </section>
    </main>
    <?php
include('vista/inferior.php');
?>



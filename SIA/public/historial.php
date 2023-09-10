<?php
include('vista/superior.php');
?>
    <!--Cuerpo de la pagina-->
    <main>
        <h1 class="title">Historial</h1> <!--Titulo de la Pagina-->
        <!--Seccion de las tablas de items-->
        <section class="cuadrado" id="cuadradov2">
            <h2 class="sub_title"> Historial de Facturacion </h2>
            <form>
                <div class="field"> <!--Nombre-->
                    <label>Cliente</label>
                    <input type="text" name="nombre_historial" required placeholder="Nombre">
                </div>
            </form>
        </section>
    </main>
    <?php
include('vista/inferior.php');
?>



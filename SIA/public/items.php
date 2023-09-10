<?php
include('vista/superior.php');
?>
    <!--Cuerpo de la pagina-->
    <main>
        <h1 class="title">Items</h1> <!--Titulo de la Pagina-->
        <!--Seccion de crear un nuevo item-->
        <section class="cuadrado">
            <h2 class="sub_title">Crear un nuevo item </h2>
            <form>
                <div class="field"> <!--Nombre-->
                    <label>Nombre</label>
                    <input type="text" name="nombre_item" required placeholder="Nombre">
                </div>
                <div class="field"> <!--Precio Unitario-->
                    <label>Precio Unitario</label>
                    <input type="double" name="precio_item" required placeholder="Precio Unitario">
                </div>
                <div class="field"> <!--Unidad-->
                    <label>Descripcion</label>
                    <input type="text" name="descripcion_item" required placeholder="Unidad">
                </div>
                <div class="field"> <!--Stock-->
                    <label>Stock</label>
                    <input type="integer" name="stock_item" required placeholder="Stock">
                </div>
            </form>
            <button>Ingresar</button>
        </section>
        <!--Seccion de las tablas de items-->
        <section class="cuadrado" id="cuadradov2">
            <h2 class="sub_title"> Historial de Items </h2>
            <form>
                <div class="field"> <!--Nombre-->
                    <label>Nombre</label>
                    <input type="text" name="nombre_item" required placeholder="Nombre">
                </div>
            </form>
        </section>
    </main>
    <?php
include('vista/inferior.php');
?>

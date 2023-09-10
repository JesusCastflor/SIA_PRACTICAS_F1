<?php
session_start();
if (empty($_SESSION["ID_Vendedor"])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <!--Font Awesome para los iconos-->
    <link rel="stylesheet" href="css/style.css">   <!--Estilos css-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
  <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <title>Sistema de Facturacion</title>
</head>

<body id="body">
    <header>    <!--Almacena el boton del menu-->
        <div class="icon_menu" id="btn_open"> <!--Contenedor el icono del menu-->
            <i class="fas fa-bars"></i> <!--Icono del menu-->
        </div>
        <div class="usuario_menu">
            <i class="fa-solid fa-user" title="Usuario"></i> 
            <?php
            echo " ";
            echo " ",$_SESSION["Nombres"] ," ", $_SESSION["Apellidos"];
            ?>
        </div>
    </header>
    <div class="menu_side" id="menu_side"> <!--Menu-->

        <div class="name_page"> <!--Nombre de la Pagina-->
            <i class="fa-solid fa-cart-shopping"></i>
            <h4>Sistema de Facturacion</h4>
        </div>

        <div class="options_menu"> <!--Las opciones del menu-->
            <a href="usuario.php" id="Usuario">
                <div class="option">
                    <i class="fa-solid fa-user" title="Usuario"></i> <!--Inicio-->
                    <h4>Usuarios</h4>
                </div>
            </a>
            <a href="index.php" id="Inicio">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i> <!--Inicio-->
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="facturacion.php" id="Facturacion">
                <div class="option">
                    <i class="fa-regular fa-file" title="Facturacion"></i> <!--Facturacion-->
                    <h4>Facturacion</h4>
                </div>
            </a>
            <a href="cliente.php" id="Clientes">
                <div class="option">
                    <i class="fa-regular fa-address-book" title="Clientes"></i> <!--Clientes-->
                    <h4>Clientes</h4>
                </div>
            </a>
            <a href="items.php" id="Items">
                <div class="option">
                    <i class="fa-regular fa-clipboard" title="Items"></i> <!--Items-->
                    <h4>Items</h4>
                </div>
            </a>
            <a href="historial.php" id="Historial">
                <div class="option">
                    <i class="fa-solid fa-calendar-days" title="Historial"></i> <!--Historial-->
                    <h4>Historial de Facturacion</h4>
                </div>
            </a>
            <a href="../controlador/controlador_cerrar.php" id="Historial">
                <div class="option">
                    <i class="fa-solid fa-right-to-bracket" title="Historial"></i> <!--Historial-->
                    <h4>Salir</h4>
                </div>
            </a>
        </div>

    </div>

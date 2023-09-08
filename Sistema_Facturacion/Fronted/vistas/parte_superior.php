<?php
include("../BD/session.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
  <title>Base de Datos</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
  <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
        <i class="fa-solid fa-building-columns"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UCSM <sup></sup></div>
      </a>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href=" home.php">
  <i class="fa-solid fa-house"></i>
    <span>Inicio</span></a>
</li>
            <!-- Divider -->
            <hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="Usuarios.php">
  <i class="fa-solid fa-user"></i>
    <span>Usuarios</span></a>
</li>
      <!-- Divider -->
      <hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="Clientes.php">
<i class="fa-solid fa-circle-user"></i>


    <span>Clientes</span></a>
</li>
      <!-- Divider -->
      <hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="Articulos.php">
<i class="fa-solid fa-circle-user"></i>


    <span>Productos</span></a>
</li>
      <!-- Divider -->
      <hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="Factura.php">
  <i class="fa-brands fa-linkedin"></i>
    <span>Factura</span></a>
</li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="../index.html">
  <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
    <span>Cerrar sesion</span></a>
</li>
<!-- Divider --


        </nav>
        <!-- End of Topbar -->
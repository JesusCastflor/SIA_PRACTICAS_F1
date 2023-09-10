<?php
include("codigosw2.php");
include("../BD/config.php");
include("session.php");
$id=$_GET['id'];

$sql = "UPDATE mae_usuario SET ValueRegistro='0'
WHERE ID_Vendedor = '$id'";

if(mysqli_query($mysqli, $sql))
{
    echo '<script>';
    echo 'Swal.fire({';
            echo '   icon: "success",';
            echo '   title: "Usuario Eliminado",';
            echo '    showConfirmButton: false,';
            echo '    timer: 1300';
    echo '}).then(function(result) {';
        echo 'window.location="../public/usuario.php";';
    echo '});';
    echo '</script>';
    } else {
    echo '<script>';
    echo 'Swal.fire({';
            echo '   icon: "error",';
            echo '   title: "Usuario no eliminado",';
            echo '   showConfirmButton: false,';
            echo '   timer: 1300';
    echo '}).then(function(result) {';
        echo 'window.location="../public/registration_usuario.php";';
    echo '});';
    echo '</script>';
    }
?>

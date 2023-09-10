<?php
session_start();
if(!empty($_POST['ingresarbtn'])){
    if(!empty($_POST['username']) and !empty($_POST['password'])){
        $usuario = $_POST['username'];
        $contrasena=$_POST['password'];
        $sql=$mysqli->query("SELECT * FROM mae_usuario WHERE Username = '$usuario' and Password = '$contrasena'");
        if ($datos=$sql->fetch_object()){
            $_SESSION["ID_Vendedor"] =$datos ->ID_Vendedor;
            $_SESSION["Nombres"] =$datos ->Nombres ;
            $_SESSION["Apellidos"] =$datos ->Apellidos;
            header("Location:public/index.php");
        }
        else {
            echo "Acceso denegado";
        }
    }else{
        echo "campos vacios";
    }
}
?>
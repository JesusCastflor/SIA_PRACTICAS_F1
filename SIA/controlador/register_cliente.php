
<?php
include("codigosw2.php");
include("../BD/config.php");
include("session.php");

$Tipo_Documento=$_POST['Tipo_Documento'];
$ID_Cliente =$_POST['ID_Cliente'];
$Nombres_Apellidos=$_POST['nombres_cliente']." ".$_POST['apellidos_cliente'];
$Email=$_POST['email_cliente'];
$Mobile=$_POST['telefono_cliente'];
$Direccion=$_POST['razon_cliente'];

$sql="INSERT INTO mae_cliente(Tipo_Documento,ID_Cliente,Nombres_Apellidos,Email,Mobile,Direccion,ValueRegistro) VALUES
('$Tipo_Documento','$ID_Cliente','$Nombres_Apellidos','$Email','$Mobile','$Direccion',1)";

if(mysqli_query($mysqli, $sql)){
echo '<script>';
echo 'Swal.fire({';
        echo '   icon: "success",';
        echo '   title: "Nuevo cliente agregado",';
        echo '    showConfirmButton: false,';
        echo '    timer: 1300';
echo '}).then(function(result) {';
    echo 'window.location="../public/cliente.php";';
echo '});';
echo '</script>';
} else {
echo '<script>';
echo 'Swal.fire({';
        echo '   icon: "error",';
        echo '   title: "cliente no creado",';
        echo '   showConfirmButton: false,';
        echo '   timer: 1300';
echo '}).then(function(result) {';
    echo 'window.location="../public/cliente.php";';
echo '});';
echo '</script>';
}
?>
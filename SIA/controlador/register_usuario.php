
<?php
include("codigosw2.php");
include("../BD/config.php");
include("session.php");

$ID_Vendedor=$_POST['ID_Vendedor'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Mobile=$_POST['Mobile'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$sql="INSERT INTO mae_usuario(ID_Vendedor,Nombres,Apellidos,Mobile,Email,Username,Password,ValueRegistro) VALUES
('$ID_Vendedor','$Nombres','$Apellidos','$Mobile','$Email','$Username','$Password',1)";

if(mysqli_query($mysqli, $sql)){
echo '<script>';
echo 'Swal.fire({';
        echo '   icon: "success",';
        echo '   title: "Nuevo usuario agregado",';
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
        echo '   title: "Usuario no creado",';
        echo '   showConfirmButton: false,';
        echo '   timer: 1300';
echo '}).then(function(result) {';
    echo 'window.location="../public/registration_usuario.php";';
echo '});';
echo '</script>';
}
?>

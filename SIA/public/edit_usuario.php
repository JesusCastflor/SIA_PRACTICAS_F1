<?php
include('vista/superior.php');
?>
<?php
include("../BD/config.php");
$id = $_GET['id'];
?>
<main>
        <h1 class="title">Modificar </h1>
    <section class="cuadrado">
    <h2 class="sub_title">Modificar datos del Usuario </h2>
                                    <form action="../controlador/update_usuario.php" method="POST">
                                    <?php
                                    $result = mysqli_query($mysqli, "SELECT * FROM mae_usuario WHERE ID_Vendedor= '$id'");
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<input type='hidden' name='id' value='{$row['ID_Vendedor']}' required>";
                                        echo "   <div class='field'>";
                                        echo "       <label for='firstname' class='col-form-label'>Numero de Documento :</label>";
                                        echo "       <input type='text' class='form-control' placeholder='' name='ID_Vendedor' value='{$row['ID_Vendedor']}' required>";
                                        echo "    </div>";
                                        echo "   <div class='field'>";
                                        echo "       <label for='firstname' class='col-form-label'>Nombres :</label>";
                                        echo "       <input type='text' class='form-control' placeholder='' name='nombres' value='{$row['Nombres']}' required>";
                                        echo "    </div>";
                                        echo "    <div class='field'>";
                                        echo "        <label for='lastname' class='col-form-label'>Apellidos :</label>";
                                        echo "        <input type='text' class='form-control' placeholder='' name='apellidos' value='{$row['Apellidos']}' required>";
                                        echo "    </div>";
                                        echo "    <div class='field'>";
                                        echo "        <label for='mobile' class='col-form-label'>Mobile :</label>";
                                        echo "        <input type='text' class='form-control' placeholder='' name='mobile' value='{$row['Mobile']}' required>";
                                        echo "    </div>";
                                        echo "    <div class='field'>";
                                        echo "        <label for='email' class='col-form-label'>Email :</label>";
                                        echo "        <input type='email' class='form-control' placeholder='' name='email' value='{$row['Email']}' required>";
                                        echo "    </div>";
                                        echo "    <div class='field'>";
                                        echo "        <label for='username' class='col-form-label'>Usuario :</label>";
                                        echo "        <input type='text' class='form-control' placeholder='' name='username' value='{$row['Username']}' required>";
                                        echo "    </div>";
                                        echo "    <div class='field'>";
                                        echo "        <label for='password' class='col-form-label'>Contraseña :</label>";
                                        echo "        <input type='text' class='form-control' placeholder='' name='password' value='{$row['Password']}' required>";
                                        echo "    </div>";
                                        echo "<div class='modal-footer'>";
                                        echo "<a type='button' class='btn btn-light' onclick='history.back()' data-dismiss='modal'>Cancelar</a>";
                                        echo "<button type='submit' id='btnGuardar' class='btn btn-dark'>Guardar</button>";
                                        echo "</div>";
                                    }
                                    ?>

            </form>
    </section>
</main>
<?php
include('vista/inferior.php');
?>
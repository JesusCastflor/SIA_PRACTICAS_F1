<?php
include('vista/superior.php');
?>
<?php
$query = "SELECT * FROM mae_usuario where ValueRegistro='1'";
$result = filterRecord($query);

function filterRecord($query)
{
    include("../BD/config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
}
?>
    <!--Cuerpo de la pagina-->
    <main>
<div class="container">
    <Center>
        <h1>Usuarios</h1>
    </Center>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" type="button"  href="registration_usuario.php"  >Nuevo</a>
<br>
<br>
            </div>
            </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <?php
                    echo "<table id='example' class='table table-striped table-bordered table-condensed' style='width:100%'>
<thead class='text-center'>
<tr>
<th> Numero </th>
<th>Nombres y Apellidos</th>
<th>Celular</th>
<th>Email</th>
<th>Acciones</th>
</tr></thead>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['ID_Vendedor'] . "</td>";
                        echo "<td>" . $row['Nombres'] ." ". $row['Apellidos']  ."</td>";
                        echo "<td>" . $row['Mobile'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td >";
                        echo "<div class='text-center'>";
                        echo "<div class='btn-group'>";
                        echo "<a  type='button' id='btn-editar-popup-user'class='btn btn-light'  href='edit_usuario.php?id=" . $row['ID_Vendedor'] . "'>Editar</a>";
                        echo "<a  type='button' class='btn btn-danger btnBorrar' href='../controlador/delete_usuario.php?id=". $row['ID_Vendedor'] . "'>Borrar</a>";
                        echo "</div></div></td>";
                        echo "</tr>";
                    } 
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

    </main>
<?php
include('vista/inferior.php');
?>

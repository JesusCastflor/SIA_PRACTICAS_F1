<?php
include('vista/superior.php');
?>
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/style.css">


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
    <h1 class="title">Usuarios</h1>
    <section class="cuadrado">
        <h2 class="sub_title"> Lista de Usuarios</h2>

            
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
        <button>
                <a class="btn btn-success" type="button"  href="registration_usuario.php">Nuevo</a>
        </button>
    </div>
    

    </section>
    </main>
<?php
include('vista/inferior.php');
?>

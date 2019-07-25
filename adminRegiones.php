<?php

    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $objRegion = new Region();
    $listadoRegiones = $objRegion->listarRegiones();

    include 'templates/header.php';

?>

    <section class="container">
        <h1>Panel de regiones</h1>

        <table class="table table-hover table-border table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="formAgregarRegion.php" class="btn btn-success">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
            foreach ( $listadoRegiones as $region ){
?>
                <tr>
                    <td><?php  echo $region['regID']; ?></td>
                    <td><?php echo $region['regNombre']; ?></td>
                    <td>
                        <a href="formModificarRegion.php?regID=<?php echo $region['regID']; ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarRegion.php" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span &nbsp; >Eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>
            </tbody>
        </table>

    </section>

<?php
    include 'templates/footer.php';
?>
<?php

    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $objRegion = new Region();
    $objRegion->verRegionPorID();
    include 'templates/header.php';
?>

    <section class="container">

        <h1>Formulario de modificación de una región</h1>

        <div class="well">
            <form action="modificarRegion.php" method="post">
                <div class="form-group form-group-lg">
                    <input type="text" name="regNombre" value="<?php echo $objRegion->getRegNombre(); ?>" class="form-control" placeholder="Nombre de la región" required>
                    <input type="hidden" name="regID" value="<?php echo $objRegion->getRegID(); ?>">
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" value="Modificar Región" class="btn btn-warning">
                    <a href="adminRegiones.php" class="btn btn-default">Volver al Listado de regiones</a>
                </div>
            </form>
        </div>

    </section>

<?php
    include 'templates/footer.php';
?>
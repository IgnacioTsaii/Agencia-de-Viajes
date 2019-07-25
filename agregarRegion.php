<?php
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $objRegion = new Region();
    $chequeo = $objRegion->agregarRegion();

    include 'templates/header.php';
?>
    <section class="container">
        <h1>Alta de una nueva Ragión</h1>
<?php
    if ( $chequeo ){
?>
        <div class="alert alert-success">
            Se ha agregado con éxito la Región
            <?php   echo $objRegion->getRegNombre();   ?>
            con el id <?php   echo $objRegion->getRegID();   ?>
            <a href="adminRegiones.php" class="btn btn-secondary">Volver a panel de regiones</a>
        </div>
<?php
    }
?>
    </section>

<?php
    include 'templates/footer.php';
?>
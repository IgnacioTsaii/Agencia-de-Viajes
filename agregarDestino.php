<?php
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $objDestino = new Destino();
    $chequeo = $objDestino->agregarDestino();

    include 'templates/header.php';
?>

    <section class="container">
        <h1>Alta de un nuevo Destino</h1>
        <?php
        if ( $chequeo ){
            ?>
            <div class="alert alert-success">
                Se ha agregado con éxito el Destino
                <?php   echo $objDestino->getDestNombre();   ?>
                con el id <?php   echo $objDestino->getDestID();   ?>
                <a href="adminDestinos.php" class="btn btn-secondary">Volver a panel de Destinos</a>
            </div>
            <?php
        }
        ?>

    </section>

<?php
    include 'templates/footer.php';
?>
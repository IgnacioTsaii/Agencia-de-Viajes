<?php
    require 'clases/Conexion.php';
    require 'clases/Region.php';

    $objRegion = new Region();
    $listarRegiones = $objRegion->listarRegiones();

    include 'templates/header.php';
?>

    <section class="container">
<?php

    foreach( $listarRegiones as $region ){
        echo $region['regID'], ' ', $region['regNombre'], '<br>';
    }

 ?>
    </section>

<?php
    include 'templates/footer.php';
?>
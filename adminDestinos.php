<?php

    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $objDestino = new Destino();
    $listadoDestinos = $objDestino->listarDestinos();
    include 'templates/header.php';
?>

    <section class="container">
        <h1>Panel de administracion de Destinos</h1>
        
	<table class="table table-striped table-hover table-border">
            <thead class="thead-dark">
                <tr>
                    <th> #</th>
                    <th> Nombre Destino</th>
                    <th> Region </th>
                    <th> Precio </th>
                    <th> Asientos </th>
                    <th> Disponibles </th>
				    <th colspan="2">
                        <a href="formAgregarDestino.php" class="btn btn-success">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>  
<?php
            foreach( $listadoDestinos as $destino ){
 ?>		
		<tr>
            <td><?php echo $destino['destID']; ?></td>
            <td><?php echo $destino['destNombre']; ?></td>
            <td><?php echo $destino['regNombre']; ?></td>
            <td><?php echo $destino['destPrecio']; ?></td>
            <td><?php echo $destino['destAsientos']; ?></td>
            <td><?php echo $destino['destDisponibles']; ?></td>
            
            <td>
            <a href="formModificarDestino.php?destID=<?php echo $destino['destID']; ?>" class="btn btn-warning  float-right">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; Modificar
            </a>
            </td>
            <td>
            <a href="formEliminarDestino.php?destID=<?php echo $destino['destID']; ?>" class="btn btn-danger float-right">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> &nbsp;  Eliminar
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
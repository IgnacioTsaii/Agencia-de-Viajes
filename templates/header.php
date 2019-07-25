<?php   
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" type='image/x-icon' href="favicon.png">
    <script src="js/sweetalert2.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.css">
    <title>Agencia de Viajes</title>
</head>
<body>

<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    Agencia de Viajes
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Inicio</a></li>
                <li><a href="adminRegiones.php">Admin Regiones</a></li>
                <li><a href="adminDestinos.php">Admin Destinos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
<?php
            if( isset($_SESSION['login']) ) {
?>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
<?php
            }
            else{
?>
                <li><a href="formLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<?php
            }
?>

            </ul>
        </div>
    </nav>
</header>
</body>
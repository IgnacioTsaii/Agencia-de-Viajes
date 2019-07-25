<?php
    require 'clases/Conexion.php';
    require 'clases/Usuario.php';
    $objUsuario = new Usuario();
    $objUsuario->login();
<?php

    class Usuario
    {
        public function login()
        {
            $usuLogin = $_POST['usuLogin'];
            $usuClave = $_POST['usuClave'];
            $link = Conexion::conectar();
            $sql = "SELECT usuNombre 
                        FROM usuarios 
                        WHERE usuLogin = :usuLogin
                          AND usuClave = :usuClave";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':usuLogin', $usuLogin, PDO::PARAM_STR);
            $stmt->bindParam(':usuClave', $usuClave , PDO::PARAM_STR);
            $stmt->execute();
            $cantidad = $stmt->rowCount();
            if($cantidad){
               // rutina de autenticacion
                session_start();
                $_SESSION['login']=1;
                $detalle = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['usuNombre']=$detalle['usuNombre'];
                // ingreso
                header('location: admin.php');
            }
            else{
                header('location: formLogin.php?error=1');
            }
        }

        public function logout()
        {
            session_destroy();
            // redirección
        }
    }
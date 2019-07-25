<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $listado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $listado;
        }

        public function verRegionPorID()
        {
            $regID = $_GET['regID'];
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = " . $regID;
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $datosRegion = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->setRegID($datosRegion['regID']);
            $this->setRegNombre($datosRegion['regNombre']);
            return true;
        }

        public function agregarRegion()
        {
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO regiones
                        ( regNombre )
                        VALUES 
                        ( :regNombre )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);
            if ($stmt->execute()) {
                //registramos en el objeto sus atributos
                $this->setRegID($link->lastInsertId());
                $this->setRegNombre($regNombre);
                return true;
            }
            return false;
        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "UPDATE regiones
                        SET regNombre = :regNombre
                        WHERE regID = :regID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setRegID($regID);
                $this->setRegNombre($regNombre);
                return true;
            }
            return false;
        }
        
        public function getRegID()
        {
            return $this->regID;
        }
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        public function getRegNombre()
        {
            return $this->regNombre;
        }
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }

    }
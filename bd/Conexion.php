<?php
    class Conexion {
        public function conectar() {

            $conexion= new PDO("mysql:host=localhost;dbname=sistema-votaciones","root","");
            return $conexion;
        }
    }

?>
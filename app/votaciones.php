<?php

    require_once "../bd/Conexion.php";

    class Votaciones extends Conexion{

        public function listarRegiones(){
            $sql="SELECT id, nombre FROM regiones";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query= null;
        }

        public function listarComunas($id){
            $sql="SELECT id, nombre FROM comunas where regiones_id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id",$id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            $query= null;
        }

        public function listarCargos(){
            $sql="SELECT id, nombre FROM cargos";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query= null;
        }

        public function insertarDatos($datos){

            $sql="INSERT INTO votaciones(nombre,alias,rut,email,region,comuna,candidato,medio) VALUES (:nombre,:alias,:rut,:email,:region,:comuna,:candidato,:medio)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(':nombre',$datos['nombre'], PDO::PARAM_STR);
            $query->bindParam(':alias',$datos['alias'], PDO::PARAM_STR);
            $query->bindParam(":rut",$datos['rut'], PDO::PARAM_STR);
            $query->bindParam(":email",$datos['email'], PDO::PARAM_STR);
            $query->bindParam(":region",$datos['region'], PDO::PARAM_STR);
            $query->bindParam(":comuna",$datos['comuna'], PDO::PARAM_STR);
            $query->bindParam(":candidato",$datos['candidato'], PDO::PARAM_STR);
            $query->bindParam(":medio",$datos['medio'], PDO::PARAM_STR);
          
            return $query->execute();
            $query= null;
        }
    }


?>
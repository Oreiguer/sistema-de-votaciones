<?php

    require_once "../app/votaciones.php";
    
    $datos = array(
        'nombre' => $_POST['nombre'],
        'alias' => $_POST['alias'],
        'rut' => $_POST['rut'],
        'email' => $_POST['email'],
        'region' => $_POST['region'],
        'comuna' => $_POST['comuna'],
        'candidato' => $_POST['candidato'],
        'medio' => $_POST['medio'],
    );

    $obj = new Votaciones();

    echo $obj->insertarDatos($datos);
?>
<?php

    require_once "../app/votaciones.php";
    
    $obj = new Votaciones();
    $datos= $obj->listarRegiones();

    $template = '<option value="" disabled selected>Selecciona una opción</option>';
    $templateData= "";
    foreach ($datos as $dato){
        $templateData= $templateData.'<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>';
    }

    echo $template.$templateData;
?>
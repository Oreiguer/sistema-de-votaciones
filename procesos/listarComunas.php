<?php

    require_once "../app/votaciones.php";
    
    $id= $_POST['id'];
    $obj = new Votaciones();
    $datos= $obj->listarComunas($id);

    $template = '<option value="" disabled selected>Selecciona una opción</option>';
    $templateData= "";
    foreach ($datos as $dato){
        $templateData= $templateData.'<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>';
    }

    echo $template.$templateData;
?>
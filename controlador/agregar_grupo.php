<?php

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["numero"]) and !empty($_POST["nombre"]) and !empty($_POST["descripcion"])) {

        $numero=$_POST["numero"];
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];

    $sql=$conexion->query("insert into grupos(numero,nombre,descripcion)values('$numero','$nombre','$descripcion') ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Grupo registrado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al registrar Grupo</div>';
    }

    }else{
        echo '<div class="alert alert-warning">Algunos de los campos estan vacios</div>';
    }
}

?>
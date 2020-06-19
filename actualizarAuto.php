<?php
    // Actualiza el cliente seleccionado eb la base de datos
    
    include 'conexion.php';

    $placa = $_POST["placa"];
    $marca = $_POST["mark"];
    $modelo = $_POST["modelo"];

    echo $placa;
    $sql = "UPDATE autos SET placa='$placa', mark='$marca',  modelo='$modelo'
    WHERE placa='$placa'";
    
    if($conexion->query($sql) === TRUE) {
        echo 1;
    }    
    else {
        echo 0;
    }

    include 'pie.php'
?>
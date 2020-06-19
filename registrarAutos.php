<?php
    // Registra un auto en la base de datos 
    include 'conexion.php';

    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $estado = 1;

    echo $placa;
    $sql="INSERT INTO autos (placa, modelo, mark, estado)
          values('$placa','$modelo','$marca', '$estado')";

    echo mysqli_query($conexion, $sql);
    mysqli_close($conexion);  // Cierra la conexión
?>

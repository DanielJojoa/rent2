<?php
    // Registra un auto en la base de datos 
    include 'conexion.php';
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "rent";

    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $estado = 1;

    $sql="INSERT INTO autos (placa, modelo, mark, estado)
          values('$placa','$modelo','$marca', '$estado')";
    $respuesta = mysqli_query($conexion, $sql);
    echo $respuesta ? json_encode(array('status'=>true ,'message'=>'Auto Agregado')):json_encode(array('status'=>false ,'message'=>'Auto no agregado')) ;
?>

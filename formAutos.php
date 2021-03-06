<?php
    include 'encabezado.php';

?>

<div class="container">
    <form id="formRegistroAutos" method="POST">
        <br> <br>
        
        <div align= "center">   
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Datos del Auto </h3>
        </div>  

        <!-- Material input -->
        <div class="md-form">
            <input type="text" id="placa" name="placa" class="form-control" required>
            <label for="placa">Placa</label>
        </div>

        <select class="browser-default custom-select" id="marca" name="marca" required>
            <option value="" disabled selected>Marca</option>
            <option value="1">Ford</option>
            <option value="2">Chevrolet</option>
            <option value="3">Hyundai</option>
        </select>

        <div class="md-form">
            <input required type="text" id="modelo" name="modelo" class="form-control">
            <label for="modelo">Modelo</label>
        </div>

        <button type ="submit" class="btn btn-primary" onclick="registrarAuto()" >Registrar </button>
        <a href="index.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php';
?>


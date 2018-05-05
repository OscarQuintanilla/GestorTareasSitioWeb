<?php
    include("conexion.php");
    $email = $_SESSION['usuario'];
    $consulta = "select * from usuarios where correo = '$email'";
    $result = $conexion->query($consulta);
    $datosCuenta=$result->fetch_assoc();

    $datosCuenta['id'];
    $datosCuenta['nombre'];      
    $datosCuenta['apellido'];    
    $datosCuenta['username'];    
    $datosCuenta['correo'];    
    $datosCuenta['telefono'];    
    $datosCuenta['password'];    
    $datosCuenta['carrera'];    
    $datosCuenta['sexo'];    
    $datosCuenta['imagen'];

    $id = $datosCuenta['id'];
    $nombre = $datosCuenta['nombre'];
    $apellido = $datosCuenta['apellido'];
    $username = $datosCuenta['username'];
    $correo = $datosCuenta['correo'];
    $telefono = $datosCuenta['telefono'];
    $password = $datosCuenta['password'];
    $carrera = $datosCuenta['carrera'];
    $sexo = $datosCuenta['sexo'];
    $imagen = $datosCuenta['imagen'];    

    echo "<br><br><br>
        <input type='text' class='txtNone' id='txtGeneroNone' value='$sexo' style='display: none;' />
        <input type='text' class='txtNone' id='txtImagenNone' value='$imagen' style='display: none;' />
    ";
?>
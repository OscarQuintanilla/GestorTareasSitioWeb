<?php
    include("conexion.php");

    session_start();
    $email = $_SESSION['usuario'];
    $consulta = "select * from usuarios where correo = '$email'";
    $result = $conexion->query($consulta);
    $datosCuenta=$result->fetch_assoc();

    $datosCuenta['id'];
    $id = $datosCuenta['id'];

    $nombre = $_POST["RtxtNombre"];
    $apellido = $_POST["RtxtApellido"];
    $username = $_POST["RtxtUsername"];
    $correo = $_POST["RtxtMail"];
    $telefono = $_POST["RtxtTelefono"];
    $carrera = $_POST["RtxtCarrera"];
    $password = $_POST["RtxtContra"];
    $imagen = $_POST["RtxtImg"];
    $sexo = $_POST["RtxtGenero"];

    $consulta = "update usuarios set nombre = '$nombre', apellido = '$apellido',
        username = '$username', correo = '$correo', telefono = '$telefono', password = '$password',
        carrera = '$carrera', sexo = '$sexo', imagen = '$imagen' where id = '$id'";
    $result = $conexion->query($consulta);

?>
<script type="text/javascript">
    localStorage.setItem('edicion', 'true');
    window.location.href = "http://127.0.0.1/Shamy/index.html"; 
</script>
<?php
	include("conexion.php");
	$nombre = $_POST["RtxtNombre"];
	$apellido = $_POST["RtxtApellido"];
	$username = $_POST["RtxtUsername"];
	$correo = $_POST["RtxtMail"];
	$telefono = $_POST["RtxtTelefono"];
	$carrera = $_POST["RtxtCarrera"];
	$password = $_POST["RtxtContra"];
	$imagen = $_POST["RtxtImg"];
	$sexo = $_POST["RtxtGenero"];
	$consulta = "INSERT INTO usuarios (nombre, apellido, username, correo, telefono, password, carrera, sexo, imagen) 
        VALUES ('$nombre', '$apellido', '$username', '$correo', '$telefono', '$password', '$carrera', '$sexo', $imagen)";
    $resultado = $conexion -> query($consulta);
?>
<script type='text/javascript'>
	localStorage.setItem('presentacion', 'false');
	window.location.href = "http://127.0.0.1/Shamy/index.html"; 
</script>
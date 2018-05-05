<! DOCTYPE html>
<html>
<?PHP
session_start();
if (isset($_SESSION["Logeado"])){
    include("../php/inicioSesion.php");
    include("../php/menuWrite.php");
}else{
?>
	<script type="text/javascript">
        localStorage.setItem('failSesion', 'true');
        window.location.href = "http://127.0.0.1/Shamy/index.html"; 
    </script>
<?php
}
?>
	<head>
		<meta charset="utf-8">
		<title>Shamy</title>
        <link rel="icon" href="../img/logo.png">
		<link rel="stylesheet" type="text/css" href="../css/navar.css">
		<link rel="stylesheet" type="text/css" href="../css/start.css">
		<link rel="stylesheet" type="text/css" href="../css/alertify-default.css">
		<link rel="stylesheet" type="text/css" href="../css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<div id="wall"></div>

		<nav id="navar">
			<center>Grupo de Trabajo</center>
		</nav>

	</body>
	<scripthead>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/alertify.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
		<script type="text/javascript" src="../js/navar.js"></script>
		<script type="text/javascript" src="../js/cerrarSesion.js"></script>
		<script type="text/javascript" src="../js/imagenesSesion.js"></script>
	</scripthead>
</html>
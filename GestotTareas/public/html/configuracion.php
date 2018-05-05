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
		<link rel="stylesheet" type="text/css" href="../css/config.css">
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
			<center>Configuracion</center>
		</nav>
		
		<fieldset id="fldRegistra">
			<h1>Editar cuenta</h1><br>
			<div class="row">
				<form class="col s12" id="frmReg" action="../php/editar.php" method="post">
      				<div class="row"><br>
      					<div class="input-field col s12">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="RtxtNombre" type="text" class="validate" name="RtxtNombre"
					        	 required autocomplete="off" value="<?php echo "$nombre" ?>">
					        <label for="RtxtNombre">Nombre</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">account_box</i>
					        <input id="RtxtApellido" type="text" class="validate" name="RtxtApellido"
					        	 required autocomplete="off" value="<?php echo "$apellido" ?>">
					        <label for="RtxtApellido">Apellido</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">tag_faces</i>
					        <input id="RtxtUsername" type="text" class="validate" name="RtxtUsername"
					        	 required autocomplete="off" value="<?php echo "$username" ?>">
					        <label for="RtxtUsername">Nombre de usuario</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">contact_mail</i>
					        <input id="RtxtMail" type="email" class="validate" name="RtxtMail"
					        	 required autocomplete="off" value="<?php echo "$correo" ?>">
					        <label for="RtxtMail">Correo electronico</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">phone_android</i>
					        <input id="RtxtTelefono" type="tel" class="validate" name="RtxtTelefono"
					        	 required autocomplete="off" value="<?php echo "$telefono" ?>">
					        <label for="RtxtTelefono">Telefono</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">school</i>
					        <input id="RtxtCarrera" type="tel" class="validate" name="RtxtCarrera"
					        	 required autocomplete="off" value="<?php echo "$carrera" ?>">
					        <label for="RtxtCarrera">Carrera estudiantil</label>
        				</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        				<br><br><br><br><br><br>
        				<center><div class="switch">
					    	<label>
					    		Hombre
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Mujer
					    	</label>
					  	</div></center><br>
					  	<center><a href="#" class="btn waves-effect waves-orange" id="btn4">
        					Seleccionar imagen
        				</a></center>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">vpn_key</i>
					        <input id="RtxtContra" type="text" class="validate" name="RtxtContra"
					        	 required autocomplete="off" value="<?php echo "$password" ?>">
					        <label for="RtxtContra">Password</label>
        				</div><br>
        				<input type="text" id="txtImg" name="RtxtImg" value="<?php echo "$imagen"; ?>">
        				<input type="text" id="txtGenero" name="RtxtGenero" value="<?php echo "$sexo"; ?>">
        				<center><br><br><br><br><br>
        					<a href="#" class="btn waves-effect waves-light" id="btn1">
        						<input type="submit" value="Editar credenciales de usuario" />
        					</a>
        				</center>
			      	</div>
			    </form>
  			</div>
		</fieldset>

		<fieldset id="fldImg"><center>
			<div id="img1"><img src="../img/port1.jpg"></div>
			<div id="img2"><img src="../img/port2.jpg"></div>
			<div id="img3"><img src="../img/port3.jpg"></div>
			<div id="img4"><img src="../img/port4.jpg"></div>
			<div id="img5"><img src="../img/port5.jpg"></div>
			<div id="img6"><img src="../img/port6.jpg"></div>
			<div id="img7"><img src="../img/port7.jpg"></div>
			<div id="img8"><img src="../img/port8.jpg"></div><br><br>
			<a href="#" class="btn waves-effect waves-light" id="btn5">
        		Aceptar
        	</a>
		</center></fieldset>
	</body>
	<scripthead>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/alertify.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
		<script type="text/javascript" src="../js/navar.js"></script>
		<script type="text/javascript" src="../js/config.js"></script>
		<script type="text/javascript" src="../js/cerrarSesion.js"></script>
		<script type="text/javascript" src="../js/imagenesSesion.js"></script>
	</scripthead>
</html>
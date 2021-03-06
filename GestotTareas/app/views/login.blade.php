<! DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Shamy</title>
        <link rel="icon" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="css/start.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/alertify-default.css">
		<link rel="stylesheet" type="text/css" href="css/alertify.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		@if(Session::has("msj"))
			@{{Session::get('msj')}}	    
	   	@endif		
	</head>
	<body>	
		<div id="wall"></div>
		<fieldset id="fldIniciar">
			<h1>Iniciar Sesion</h1><br>
			<div class="row">
				<form class="col s12" id="frmLog" action="login" method="POST">
      				<div class="row"><br>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">contact_mail</i>
					        <input id="txtMail" type="email" class="validate" name="txtMail" required autocomplete="off">
					        <label for="txtMail">Correo electronico</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">vpn_key</i>
					        <input id="txtContra" type="password" class="validate" name="txtContra" required autocomplete="off">
					        <label for="txtContra">Password</label>
        				</div>
        				<center><br><br><br><br><br><br><br><br><br>
        					<a href="#" class="btn waves-effect waves-light" id="btn1">
        						<input type="submit" value="iniciar Sesion" name="iniciarSesion" />
        					</a><a href="#" class="btn waves-effect waves-red" id="btn2">
        						Registrate
        					</a>
        				</center>
			      	</div>
			    </form>
  			</div>
		</fieldset>

		<fieldset id="fldRegistra">
			<h1>Registrate</h1><br>
			<div class="row">
				<form class="col s12" id="frmReg" action="php/registrar.php" method="post">
      				<div class="row"><br>
      					<div class="input-field col s12">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="RtxtNombre" type="text" class="validate" name="RtxtNombre" 
					        	required autocomplete="off">
					        <label for="RtxtNombre">Nombre</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">account_box</i>
					        <input id="RtxtApellido" type="text" class="validate" name="RtxtApellido" 
					        	required autocomplete="off">
					        <label for="RtxtApellido">Apellido</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">tag_faces</i>
					        <input id="RtxtUsername" type="text" class="validate" name="RtxtUsername" 
					        	required autocomplete="off">
					        <label for="RtxtUsername">Nombre de usuario</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">contact_mail</i>
					        <input id="RtxtMail" type="email" class="validate" name="RtxtMail" 
					        	required autocomplete="off">
					        <label for="RtxtMail">Correo electronico</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">phone_android</i>
					        <input id="RtxtTelefono" type="number" class="validate" name="RtxtTelefono" 
					        	required autocomplete="off">
					        <label for="RtxtTelefono">Telefono</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">school</i>
					        <input id="RtxtCarrera" type="text" class="validate" name="RtxtCarrera" 
					        	required autocomplete="off">
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
					        <input id="RtxtContra" type="password" class="validate" name="RtxtContra" 
					        	required autocomplete="off">
					        <label for="RtxtContra">Password</label>
        				</div><br>
        				<input type="text" id="RtxtImg" name="RtxtImg" value="1">
        				<input type="text" id="RtxtGenero" name="RtxtGenero" value="Hombre">
        				<center><br><br><br><br><br>
        					<a href="#" class="btn waves-effect waves-light" id="btn1">
        						<input type="submit" value="De acuerdo" />
        					</a><a href="#" class="btn waves-effect waves-red" id="btn3">
        						Regresar al login
        					</a>
        				</center>
			      	</div>
			    </form>
  			</div>
		</fieldset>

		<fieldset id="fldImg"><center>
			<div id="img1"><img src="img/port1.jpg"></div>
			<div id="img2"><img src="img/port2.jpg"></div>
			<div id="img3"><img src="img/port3.jpg"></div>
			<div id="img4"><img src="img/port4.jpg"></div>
			<div id="img5"><img src="img/port5.jpg"></div>
			<div id="img6"><img src="img/port6.jpg"></div>
			<div id="img7"><img src="img/port7.jpg"></div>
			<div id="img8"><img src="img/port8.jpg"></div><br><br>
			<a href="#" class="btn waves-effect waves-light" id="btn5">
        		Aceptar
        	</a>
		</center></fieldset>
	</body>
	<scripthead>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/alertify.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</scripthead>
</html>
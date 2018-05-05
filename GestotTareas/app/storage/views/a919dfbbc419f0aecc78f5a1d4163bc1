<! DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Shamy</title>
        <link rel="icon" href="../img/logo.png">
		<link rel="stylesheet" type="text/css" href="../css/tareas.css">
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
			<center>Tareas</center>
		</nav>

		<a class="waves-effect waves-purple btn-large" id="btnAgregarTarea">
			<i class="material-icons right">note_add</i>Agregar Tarea
		</a>

		<fieldset id="fldTarea">
			<h1>Nueva Tarea</h1><br>
			<div class="row">
				<form class="col s12" id="frmTarea" action="php/tarea.php" method="post">
      				<div class="row"><br><br>
      					<center>
      						<a href="#" class="btn waves-effect waves-red" id="btn3">
        						Cancelar
        					</a>
      					</center>
      					<br>
      					<div class="input-field col s12">
					        <i class="material-icons prefix">announcement</i>
					        <input id="txtTitular" type="text" class="validate" name="txtTitular" 
					        	required autocomplete="off">
					        <label for="txtTitular">Titular</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">description</i>
					        <input id="txtDescripcion" type="text" class="validate" name="txtDescripcion" 
					        	required autocomplete="off">
					        <label for="txtDescripcion">Descripcion</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">priority_high</i>
					        <input id="txtTipo" type="text" class="validate" name="txtTipo" 
					        	required autocomplete="off">
					        <label for="txtTipo">Tipo de la tarea</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">extension</i>
					        <input id="txtFormato" type="text" class="validate" name="txtFormato" 
					        	required autocomplete="off">
					        <label for="txtFormato">Formato de presentacion</label>
        				</div>
        				<div class="input-field col s12">
					        <i class="material-icons prefix">date_range</i>
					        <input id="txtFecha" type="text" class="validate" name="txtFecha" 
					        	required autocomplete="off">
					        <label for="txtFecha">Fecha de entrega: **/**/****</label>
        				</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        				<br><br>
        				<center><div class="switch" id="switch">
					    	<label>
					    		No Esta Completada
					      		<input type="checkbox">
					      		<span class="lever"></span>
					      		Completada
					    	</label>
					  	</div></center><br>
        				<input type="text" id="txtCompleto" name="txtCompleto" value="noCompleta">
        				<center><br>
        					<a href="#" class="btn waves-effect waves-light" id="btn1">
        						<input type="submit" value="Agregar Tarea" />
        					</a>
        				</center>
			      	</div>
			    </form>
  			</div>
		</fieldset>

		<table class="centered responsive-table">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Formato de presentacion</th>
              <th>Ver</th>
              <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TADS</td>
            <td>Proyecto de catedra</td>
            <td>Power Point</td>
            <td><a class="waves-effect waves-green btn"><i class="material-icons left">pageview</i>Mirar</a></td>
            <td><a class="waves-effect waves-red btn"><i class="material-icons left">delete</i>Eliminar</a></td>
          </tr>
          <tr>
            <td>LP2</td>
            <td>Proyecto de catedra</td>
            <td>PDF</td>
            <td><a class="waves-effect waves-green btn"><i class="material-icons left">pageview</i>Mirar</a></td>
            <td><a class="waves-effect waves-red btn"><i class="material-icons left">delete</i>Eliminar</a></td>
          </tr>
          <tr>
            <td>CreaJ</td>
            <td>Proyecto de catedra</td>
            <td>PHP</td>
            <td><a class="waves-effect waves-green btn"><i class="material-icons left">pageview</i>Mirar</a></td>
            <td><a class="waves-effect waves-red btn"><i class="material-icons left">delete</i>Eliminar</a></td>
          </tr>
        </tbody>
      </table>

	</body>
	<scripthead>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/alertify.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
		<script type="text/javascript" src="../js/navar.js"></script>
		<script type="text/javascript" src="../js/tareas.js"></script>
		<script type="text/javascript" src="../js/cerrarSesion.js"></script>
		<script type="text/javascript" src="../js/imagenesSesion.js"></script>
	</scripthead>
</html>
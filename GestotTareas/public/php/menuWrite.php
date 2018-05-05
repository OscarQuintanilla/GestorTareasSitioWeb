<?php

	echo "

	<div>
	  		<ul id='slide-out' class='sidenav'>
		    	<li>
		    		<div class='user-view'>
		      			<div class='background'>
		        			<img src='../img/port1.jpg' id='imgPortMenu'>
		      			</div>
		     		<a href='#user'><img class='circle' src='../img/men.png' id='imgGeneroMenu'></a>
		      		<a href='#name'><span class='white-text name' id='txtUsernameNav'>$username</span></a>
		      		<a href='#email'><span class='white-text email' id='txtMailNav'>$correo</span></a>
		    		</div>
		    	</li>
	    		<li><a href='#!'><i class='material-icons'>web</i>Shamy</a></li>
	    		<li><a href='#!'>$carrera</a></li>
	    		<li><div class='divider'></div></li>
	    		<li><a class='subheader'>Opciones</a></li>
	    		<li><a class='waves-effect waves-purple' href='tareas.php'>
	    			<i class='material-icons'>event_note</i>Tareas</a>
	    		</li>
	    		<li><a class='waves-effect waves-purple' href='grupoTrabajo.php'>
	    			<i class='material-icons'>group_work</i>Grupos de trabajo</a>
	    		</li>
	    		<li><a class='waves-effect waves-purple' href='evaluaciones.php'>
	    			<i class='material-icons'>play_for_work</i>Evaluaciones</a>
	    		</li>
	    		<li><div class='divider'></div></li>
	    		<li><a class='waves-effect waves-purple' href='configuracion.php'>
	    			<i class='material-icons'>settings_applications</i>Configuracion</a>
	    		</li>
	    		<li><div class='divider'></div></li>
	    		<li><a class='waves-effect waves-purple' href='#' id='cerrarS'>
	    			<i class='material-icons'>power_settings_new</i>Cerrar sesion</a>
	    		</li>
	 		 </ul>
		  	<a href='#' data-target='slide-out' class='sidenav-trigger' id='iconActMen'>
		  		<i class='material-icons' id='iconActMenI'>apps</i>
		  	</a>
	  	</div>

	";
?>
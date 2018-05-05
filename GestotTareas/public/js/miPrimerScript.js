
window.onload = function(){

	nombre = "";
	apellido = "";
	email = "";
	password = "";
	boton = "";
	numero1 = 0;
	numero2 = 0;
	resultado = 0;

	function ingresar(){
		nombre = document.getElementById("nombre").value;
		apellido = document.getElementById("apellido").value;
		email = document.getElementById("email").value;
		password = document.getElementById("password").value;
		numero1 = parseInt(document.getElementById("numero1").value);
		numero2 = parseInt(document.getElementById("numero2").value);

		resultado = numero1 + numero2;

		document.getElementById("parrafo").innerHTML = nombre+"<br>"+apellido+"<br>"+email+"<br>"+password+"<br>"+resultado;
		
		document.getElementById("nombre").value = "";
		document.getElementById("apellido").value = "";
		document.getElementById("email").value = "";
		document.getElementById("password").value = "";

	}

	boton = document.getElementById("registrar");

	boton.addEventListener("click",function(){
		ingresar();
	});
}
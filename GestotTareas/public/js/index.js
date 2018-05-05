var iGenero;
$(document).ready(function(){
	ocultar();
	iGenero = 0;
	var sesionFail = localStorage.getItem("failSesion");
	var presentacion = localStorage.getItem("presentacion");
	var edicion = localStorage.getItem("edicion");
	if(sesionFail == null){
		localStorage.setItem('failSesion', 'false');
	}else if(sesionFail == 'true'){
		alertify.error("Error al inicio de sesion");
	}
	if(presentacion == 'false'){
		alertify.success("Tu usuario se creo satisfactoriamente");
		document.getElementById("frmLog").reset();
		document.getElementById("frmReg").reset();
	}
	if(edicion == "true"){
		alertify.alert("Tu usuario se a modificado satisfactoriamente, porfavor, " +
			"inicia sesion con tus nuevas credenciales");
	}
	setTimeout(timerBody, 3000);
});
function timerBody(){
	localStorage.setItem('presentacion', 'true');
	localStorage.setItem('failSesion', 'false');
	localStorage.setItem('edicion', 'false');
}
$("#btn3").click(function(){
	ocultar();
});
$("#btn2").click(function(){
	mostrar();
});
function ocultar(){
	$("#fldRegistra").css("left", "75%");
	$("#wall").css("filter", "blur(1px)");
	$("#wall").css("opacity", "0.4");
	$("#fldIniciar").css("opacity", "1");
	$("#fldRegistra").css("opacity", "0");
	document.getElementById("frmLog").reset();
	document.getElementById("frmReg").reset();
}
function mostrar(){
	$("#fldRegistra").css("left", "0%");
	$("#wall").css("filter", "blur(50px)");
	$("#wall").css("opacity", "0.7");
	$("#fldIniciar").css("opacity", "0");
	$("#fldRegistra").css("opacity", "1");
	document.getElementById("frmLog").reset();
	document.getElementById("frmReg").reset();
}
$("#btn4").click(function(){
	$("#fldImg").css("left", "-10%");
	$("#fldRegistra").css("opacity", "0.3");
	$("#fldRegistra").css("filter", "grayscale(1)");
});
$("#btn5").click(function(){
	ocultarImgFld();
});
$("#img1").click(function(){
	mensajeImg(1);
});
$("#img2").click(function(){
	mensajeImg(2);
});
$("#img3").click(function(){
	mensajeImg(3);
});
$("#img4").click(function(){
	mensajeImg(4);
});
$("#img5").click(function(){
	mensajeImg(5);
});
$("#img6").click(function(){
	mensajeImg(6);
});
$("#img7").click(function(){
	mensajeImg(7);
});
$("#img8").click(function(){
	mensajeImg(8);
});
function mensajeImg(x){
	alertify.success("Imagen #" + x + " seleccionada");
	$("#RtxtImg").val(x);
	ocultarImgFld();
}
function ocultarImgFld(){
	$("#fldImg").css("left", "-100%");
	$("#fldRegistra").css("opacity", "1");
	$("#fldRegistra").css("filter", "grayscale(0)");
}	
$(".switch").click(function(){
	iGenero+=0.5;
	if(iGenero%2==0){
		$("#RtxtGenero").val('Hombre');
	}else{
		$("#RtxtGenero").val('Mujer');
	}
});
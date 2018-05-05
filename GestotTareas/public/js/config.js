var iGenero;
$(document).ready(function(){
	iGenero = 0;
});
$("#btn4").click(function(){
	$("#fldImg").css("left", "-10%");
	$("#fldRegistra").css("opacity", "0.3");
	$("#fldRegistra").css("filter", "grayscale(1)");
});
$("#btn5").click(function(){
	ocultImgFld();
});
$("#img1").click(function(){
	mensajeImg(1);
	ocultImgFld();
});
$("#img2").click(function(){
	mensajeImg(2);
	ocultImgFld();
});
$("#img3").click(function(){
	mensajeImg(3);
	ocultImgFld();
});
$("#img4").click(function(){
	mensajeImg(4);
	ocultImgFld();
});
$("#img5").click(function(){
	mensajeImg(5);
	ocultImgFld();
});
$("#img6").click(function(){
	mensajeImg(6);
	ocultImgFld();
});
$("#img7").click(function(){
	mensajeImg(7);
	ocultImgFld();
});
$("#img8").click(function(){
	mensajeImg(8);
	ocultImgFld();
});
function mensajeImg(x){
	alertify.success("Imagen #" + x + " seleccionada");
	$("#txtImg").val(x);
}	
function ocultImgFld(){
	$("#fldImg").css("left", "-100%");
	$("#fldRegistra").css("opacity", "1");
	$("#fldRegistra").css("filter", "grayscale(0)");
}
$(".switch").click(function(){
	iGenero+=0.5;
	if(iGenero%2==0){
		$("#txtGenero").val('Hombre');
	}else{
		$("#txtGenero").val('Mujer');
	}
});
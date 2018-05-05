$(document).ready(function(){
	var sex = document.getElementById("txtGeneroNone").value;
	var img = document.getElementById("txtImagenNone").value;

	if(sex=="Hombre"){
		$("#imgGeneroMenu").attr('src', '../img/men.png');
	}else if(sex=="Mujer"){
		$("#imgGeneroMenu").attr('src', '../img/woman.png');
	}

	if(img=="1"){
		$("#imgPortMenu").attr('src', '../img/port1.jpg');
	}else if(img=="2"){
		$("#imgPortMenu").attr('src', '../img/port2.jpg');
	}else if(img=="3"){
		$("#imgPortMenu").attr('src', '../img/port3.jpg');
	}else if(img=="4"){
		$("#imgPortMenu").attr('src', '../img/port4.jpg');
	}else if(img=="5"){
		$("#imgPortMenu").attr('src', '../img/port5.jpg');
	}else if(img=="6"){
		$("#imgPortMenu").attr('src', '../img/port6.jpg');
	}else if(img=="7"){
		$("#imgPortMenu").attr('src', '../img/port7.jpg');
	}else if(img=="8"){
		$("#imgPortMenu").attr('src', '../img/port8.jpg');
	}
});
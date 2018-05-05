$("#cerrarS").click(function(){
	alertify.confirm("Esta seguro que desea cerrar sesion",
  		function(){
    		alertify.error('Cerrando...');
    		window.location.href = "http://127.0.0.1/Shamy/php/cerrar.php";
  		},
  		function(){
    		alertify.success('Cierre cancelado');
  		});
});
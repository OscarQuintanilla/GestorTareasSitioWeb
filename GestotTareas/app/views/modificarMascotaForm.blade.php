@extends('masterBladePrivada')

@section('menu')
	@parent
@stop


@section('contenedor')
	
	<script type="text/javascript">

		$(document).ready(function(){

			$('#nombre').val("<?php echo $mascota->nombre; ?>");
			$('#tipo').val("<?php echo $mascota->raza; ?>");
			$('#edad').val("<?php echo $mascota->edad; ?>");
			$('#peso').val("<?php echo $mascota->peso; ?>");
			$('#altura').val("<?php echo $mascota->altura; ?>");
			$('#color').val("<?php echo $mascota->color; ?>");
			$('#descripcion').val("<?php echo $mascota->descripcion; ?>");

		});

	</script>


	<br>
	<br>
	<center>
	<br>
		@if(Session::has("msj"))
	     <div class="alert alert-info" role="alert" style="width: 100%; margin-top:-2%;">
	       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       <strong>{{Session::get("msj")}}</strong>
	     </div>
	   	@endif
	<br>
	<h2>Modificar mascota</h2>
	<form action="modificarMascota" method="POST">
		<input type="hidden" name="idM" id="idM" value="{{$mascota->id}}">
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" id="nombre" name="nombre" class="form-control"></td>
			</tr>
			<tr>
				<td>Tipo:</td>
				<td><select id="tipo" name="tipo" class="form-control">
					<option value="perro">Perro</option>
					<option value="gato">Gato</option>
					<option value="ave">Ave</option>
					<option value="reptil">Reptil</option>
					<option value="ruedor">Ruedor</option>
				</select></td>
			</tr>
			<tr>
				<td>Edad:</td>
				<td><input type="text" id="edad" name="edad" class="form-control"></td>
			</tr>
			<tr>
				<td>Peso:</td>
				<td><input type="text" id="peso" name="peso" class="form-control"></td>
			</tr>
			<tr>
				<td>Altura:</td>
				<td><input type="text" id="altura" name="altura" class="form-control"></td>
			</tr>
			<tr>
				<td>Color:</td>
				<td><input type="text" id="color" name="color" class="form-control"></td>
			</tr>
			<tr>
				<td>Descripcion:</td>
				<td><input type="text" id="descripcion" name="descripcion" class="form-control"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Modificar" name="modificar" id="modificar" class="btn btn-primary">
	</form>
	</center>
	<br>
	<br>
@stop


@section('footer')
	@parent
@stop
@extends('masterBladePrivada')

@section('menu')
	@parent
@stop


@section('contenedor')
	<br>
	<br>
	<h1 class="text-center">Lista de mascotas</h1>
	@if(Session::has("msj"))
     <div class="alert alert-danger" role="alert" style="width: 100%; margin-top:-2%;">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <strong>{{Session::get("msj")}}</strong>
     </div>
   	@endif
	<table class="table table-bordered table-striped">
		<tr class="table-primary">
			<th>Id</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Edad</th>
			<th>Peso</th>
			<th>Altura</th>
			<th>Color</th>
			<th>Descripción</th>
			<th colspan="2">Operaciones</th>
		</tr>
		@foreach($mascotas as $mascota)
		<tr>
			<td>{{$mascota->id}}</td>
			<td>{{$mascota->nombre}}</td>
			<td>{{$mascota->raza}}</td>
			<td>{{$mascota->edad}}</td>
			<td>{{$mascota->peso}}</td>
			<td>{{$mascota->altura}}</td>
			<td>{{$mascota->color}}</td>
			<td>{{$mascota->descripcion}}</td>
			<td><a href="modificar-mascota-form-{{$mascota->id}}" style="color:blue;">Modificar</a></td>
			<td><a href="eliminar-mascota-{{$mascota->id}}" style="color:red;">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
	<br>
	<br>
@stop


@section('footer')
	@parent
@stop
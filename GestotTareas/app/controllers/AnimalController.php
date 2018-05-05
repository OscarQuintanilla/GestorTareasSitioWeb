<?php

	class AnimalController extends BaseController{

		public function inicio(){
			return View::make("login");
		}

		public function registroMascotaForm(){
			return View::make("registroMascota");
		}


		public function registrarMascota(){
			$nombre = Input::get('nombre');
			$tipo = Input::get('tipo');
			$edad = Input::get('edad');
			$peso = Input::get('peso');
			$altura = Input::get('altura');
			$color = Input::get('color');
			$descripcion = Input::get('descripcion');

			$animal = new Mascota;

			$animal->id_usuario = Session::get('idUsuario');
			$animal->nombre = $nombre;
			$animal->raza = $tipo;
			$animal->edad = $edad;
			$animal->peso = $peso;
			$animal->altura = $altura;
			$animal->color = $color;
			$animal->descripcion = $descripcion;
			$animal->save();

			return Redirect::to('registro-mascota-form')->with('msj','Mascota ingresada exitosamente');
		}


		public function listaMascotas(){
			$mascotas = Mascota::where('id_usuario','=',Session::get('idUsuario'))->get();
			return View::make('listaMascotas',array('mascotas'=>$mascotas));
		}

		public function eliminarMascota($identificador){
			$mascota = Mascota::find($identificador);
			$mascota->delete();

			return Redirect::to('listaMascotas')->with('msj','Mascota Eliminada');
		}

		public function modificarMascotaForm($idMascota){
			$mascota = Mascota::find($idMascota);
			return View::make('modificarMascotaForm', array('mascota'=>$mascota));
		}

		public function modificarMascota(){
			$idM = Input::get('idM');
			$animal = Mascota::find($idM);

			$nombre = Input::get('nombre');
			$tipo = Input::get('tipo');
			$edad = Input::get('edad');
			$peso = Input::get('peso');
			$altura = Input::get('altura');
			$color = Input::get('color');
			$descripcion = Input::get('descripcion');

			$animal->nombre = $nombre;
			$animal->raza = $tipo;
			$animal->edad = $edad;
			$animal->peso = $peso;
			$animal->altura = $altura;
			$animal->color = $color;
			$animal->descripcion = $descripcion;
			$animal->save();

			return Redirect::to('listaMascotas');

		}

	}//CIERRE DE LA CLASE

?>
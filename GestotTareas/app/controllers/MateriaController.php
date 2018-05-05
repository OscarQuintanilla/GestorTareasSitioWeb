<?php

    class MateriaController extends BaseController{


		public function registroMateriaForm(){
			return View::make("registroMateria");
		}

        //Terminar el ingreso
        public function registrarMateria(){
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

        public function obtenerMateria(){
            $materia = DB::table('materia')->get();
            return View::make('listaMaterias', array('materias' => $materias));
        }

        public function eliminarMateria($identificador){
            $materias = Materia::find($identificador);
            $materias->delete();

            return Redirect::to('listaMaterias')->with('msj', 'Materia eliminada');
        }

        public function modificarMateria($idTarea){
			$materias = Materia::find($idTarea);
			return View::make('modificarMateriaForm', array('materias'=>$materias));
        }
        
        //Terminar la modificación
        public function modificarMateria(){
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

    }

?>
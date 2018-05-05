<?php

    class EvaluacionController extends BaseController{

		public function registroEvaluacionForm(){
			return View::make("registroEvaluacion");
		}

        //Terminar el ingreso
        public function registrarEvaluacion(){
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

        public function obtenerEvaluacion(){
            $evaluacion = DB::table('evaluaciones')->get();
            return View::make('listaEvaluaciones', array('evaluacion' => $evaluacion));
        }

        public function eliminarEvaluacion($identificador){
            $evaluacion = Evaluacion::find($identificador);
            $evaluacion->delete();

            return Redirect::to('listaEvaluaciones')->with('msj', 'Evaluacion eliminada');
        }

        public function modificarEvaluacion($idTarea){
			$evaluacion = Evaluacion::find($idTarea);
			return View::make('modificarEvaluacionForm', array('evaluacion'=>$evaluacion));
        }
        
        //Terminar la modificación
        public function modificarEvaluacion(){
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
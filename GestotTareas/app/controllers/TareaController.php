<?php

    class TareaController extends BaseController{

		public function registroTareaForm(){
			return View::make("registroTarea");
		}

        //Terminar el ingreso
        /*public function registrarTareas(){
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
		}*/

        public function obtenerTareas(){
            $tareas = DB::table('tareas')->get();
            return View::make('listaTareas', array('tareas' => $tareas));
        }

        public function eliminarTareas($identificador){
            $tarea = Tarea::find($identificador);
            $tarea->delete();

            return Redirect::to('listaTareas')->with('msj', 'Tarea eliminada');
        }

        public function modificarTarea($idTarea){
			$tarea = Tarea::find($idTarea);
			return View::make('modificarTareaForm', array('tarea'=>$tarea));
        }
        
        //Terminar la modificación
        /*public function modificarTarea(){
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

		}*/

    }

?>
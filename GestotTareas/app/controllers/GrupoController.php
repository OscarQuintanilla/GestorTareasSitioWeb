<?php

    class GrupoController extends BaseController{

		public function registroGrupoForm(){
			return View::make("registroGrupo");
		}

        //Terminar el ingreso
        public function registrarGrupo(){
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

        public function obtenerGrupo(){
            $grupos = DB::table('gruposdetrabajo')->get();
            return View::make('listaGrupos', array('grupos' => $grupos));
        }

        public function eliminarGrupo($identificador){
            $grupo = Grupo::find($identificador);
            $grupo->delete();

            return Redirect::to('listaGrupos')->with('msj', 'Grupo eliminada');
        }

        public function modificarGrupo($idGrupo){
			$grupo = Tarea::find($idGrupo);
			return View::make('modificarGrupoForm', array('grupo'=>$grupo));
        }
        
        //Terminar la modificación
        public function modificarGrupo(){
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
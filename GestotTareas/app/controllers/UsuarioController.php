<?php
	class UsuarioController extends BaseController{
		public function login(){
			$email = Input::get('txtEmail');
			$password = Input::get('txtContra');
			$email = "oscar.quintanilla@hotmail.com";
			$password = "admin123";
			$usuarioE = Usuario::where('Correo','=',$email)->where('Clave','=',$password)->count();

			if($usuarioE == 1){
				$usuario = Usuario::where('Correo','=',$email)->where('Clave','=',$password)->get();
				Session::put('logueado',true);
				Session::put('idUsuario',$usuario[0]->id);
				return Redirect::to('Tareas');
			}else{
				return Redirect::to('inicio')->with('msj','Usuario o contraseña incorrecto');
			}
		}
		public function salir(){
			Session::flush();
			return Redirect::to('inicio')->with('msj', 'Sesion cerrada exitosamente');
		}
	}
?>
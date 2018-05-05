<?php

/*********************************** Ruta raiz *******************************************************/
Route::get("/", function(){return View::make("login");});

Route::get("inicio", function(){return View::make("login");});

Route::post('login', array('uses'=>'UsuarioController@login'));

Route::get('salir', array('uses'=>'UsuarioController@salir'));

/* Grupos de Trabajo */
Route::get("Grupos", function(){return View::make("listaGrupos");});

Route::get("registro-grupos-form", array("uses"=>"GrupoController@registroGrupoForm","before"=>"seguridad"));

Route::post("registrarGrupo", array("uses"=>"GrupoController@registrarGrupo"));

Route::get('listaGrupos', array('uses'=>'GrupoController@obtenerGrupo', 'before'=>'seguridad'));

Route::get('eliminar-grupo-{identificador}', array('uses'=>'GrupoController@eliminarGrupo', 'before'=>'seguridad'));

Route::get('modificar-grupo-form-{idGrupo}', array('uses'=>'GrupoController@modificarGrupoForm', 'before'=>'seguridad'));

Route::post('modificarGrupo', array('uses'=>'GrupoController@modificarGrupo'));

/* Tareas */
Route::get("Tareas", function(){return View::make("listaTareas");});

Route::get("registro-tareas-form", array("uses"=>"TareaController@registroTareaForm","before"=>"seguridad"));

Route::post("registrarTareas", array("uses"=>"TareaController@registrarTarea"));

Route::get('listaTareas', array('uses'=>'TareaController@obtenerTarea', 'before'=>'seguridad'));

Route::get('eliminar-tareas-{identificador}', array('uses'=>'TareaController@eliminarTarea', 'before'=>'seguridad'));

Route::get('modificar-tareas-form-{idEvaluacion}', array('uses'=>'TareaController@modificarTareaForm', 'before'=>'seguridad'));

Route::post('modificarTareas', array('uses'=>'TareaController@modificarTarea'));

/* Materias */
Route::get("Materias", function(){return View::make("listaMaterias");});

Route::get("registro-materias-form", array("uses"=>"MateriaController@registroMateriaForm","before"=>"seguridad"));

Route::post("registrarMateria", array("uses"=>"MateriaController@registrarMateria"));

Route::get('listaMaterias', array('uses'=>'MateriaController@obtenerMateria', 'before'=>'seguridad'));

Route::get('eliminar-materia-{identificador}', array('uses'=>'MateriaController@eliminarMateria', 'before'=>'seguridad'));

Route::get('modificar-materia-form-{idMateria}', array('uses'=>'MateriaController@modificarMateriaForm', 'before'=>'seguridad'));

Route::post('modificarMateria', array('uses'=>'MateriaController@modificarMateria'));


/* Evaluaciones */
Route::get("Evaluaciones", function(){return View::make("listaEvaluaciones");});

Route::get("registro-evaluacion-form", array("uses"=>"EvaluacionController@registroEvaluacionForm","before"=>"seguridad"));

Route::post("registrarEvaluacion", array("uses"=>"EvaluacionController@registrarEvaluacion"));

Route::get('listaEvaluacion', array('uses'=>'EvaluacionController@obtenerEvaluacion', 'before'=>'seguridad'));

Route::get('eliminar-evaluacion-{identificador}', array('uses'=>'EvaluacionController@eliminarEvaluacion', 'before'=>'seguridad'));

Route::get('modificar-evaluacion-form-{idEvaluacion}', array('uses'=>'EvaluacionController@modificarEvaluacionForm', 'before'=>'seguridad'));

Route::post('modificarEvaluacion', array('uses'=>'EvaluacionController@modificarEvaluacion'));






Route::get("registro-mascota-form", array("uses"=>"AnimalController@registroMascotaForm","before"=>"seguridad"));

Route::post("registrarMascota", array("uses"=>"AnimalController@registrarMascota"));

Route::get('listaMascotas', array('uses'=>'AnimalController@listaMascotas', 'before'=>'seguridad'));

Route::get('eliminar-mascota-{identificador}', array('uses'=>'AnimalController@eliminarMascota', 'before'=>'seguridad'));

Route::get('modificar-mascota-form-{idMascota}', array('uses'=>'AnimalController@modificarMascotaForm', 'before'=>'seguridad'));

Route::post('modificarMascota', array('uses'=>'AnimalController@modificarMascota'));

?>

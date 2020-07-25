<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
   public  function index(){
        return 'buenas nochessss, estamos llamando desde la ruta';
    }

public function parametrosAction($nombre,$edad){
	$out = 'Nombre:'.$nombre.'<br>';
	$out.'Edad:'.$edad;
	return $out;
}

public function vistaAction(){
	return view('prueba.saludo_view');
}


public function datosAction($nombre,$edad){
	
	// ENVIAR DATOS 1 ( no recomendable)
	
	/*return view('prueba.datos_view')
	      ->with('nombre',$nombre);
	       ->with('edad',$edad);
	*/
 // enviar datos 2 (recomendable)
	       /*
	       $data['nombre'] = $nombre;
	       $data['edad'] = $edad;

	       return view('prueba.datos_view',$data)
*/
// enviar datos 3
$data = compact('nombre','edad');
return view('prueba.datos_view',$data);	       

}

}


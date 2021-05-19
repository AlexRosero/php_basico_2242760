<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //
        public function formulario_buscador(){
        	//mostrar la vista del metabuscador
        	return view ('metabuscador');

        }

        public function buscar (){
        	//datos llegan al areglo $_POST
        	$termino = $_POST ["termino"];
        	$motor = $_POST ["motores"];

        	//redireccionar al motor correcto, junto con el termino
        	//querystring
        	switch ($motor) {

        		case 1: return redirect()->to ("https://www.google.com/search?q=$termino
        			")
        		   	break;
        		case 2:  return redirect()->to ("https://www.bing.com/search?q=$termino
        			")
        			break;
        	



        }


}



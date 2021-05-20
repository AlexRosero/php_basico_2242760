<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion para mostrar el formulario de busqueda
        public function formulario_buscador(){

        	//mostrar la vista del metabuscador
        	return view ('metabuscador');

        }

    //accion para realizar busqueda
        public function buscar (){

        	//datos llegan al areglo $_POST
         	$termino = $_POST ["termino"];
        	$motor = $_POST ["motores"];

        	//redireccionar al motor correcto, junto con el termino
        	//querystring
        	switch ($motor) {

        		case 1: return redirect()->to ("https://www.google.com/search?q=$termino");
        		   	break;
        		case 2:  return redirect()->to ("https://www.bing.com/search?q=$termino");
        			break;

                case 3:  return redirect()->to ("https://espanol.search.yahoo.com/search;_ylt=AwrEzeKIzaVg.A4ASgkuEQx.?q=$termino");
                    break;

                case 4:  return redirect()->to ("https://duckduckgo.com/?q=$termino");
                    break;

                case 5:  return redirect()->to ("https://www.search.ask.com/web?q=$termino");
                    break;

                case 6:  return redirect()->to ("https://yandex.com/search/?text=$termino");
                    break;

                case 7:  return redirect()->to ("https://www.ecosia.org/search?q=$termino");
                    break;

                case 8:  return redirect()->to ("https://www.youtube.com/search?q=$termino");
                    break;


                case 9:  return redirect()->to ("https://www.globo.com/busca/?q=$termino");
                    break;

                case 10:  return redirect()->to ("https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313&_nkw=$termino");
                    break;













        }


}

}




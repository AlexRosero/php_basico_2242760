<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});


//callback: funcion sin nombre.
//que hace parte de los parametros de la invocacion de otra.
route::get('variables' ,function(){
	//JAVA, .NET: fuertemente tipados.
	//PHP. JAVASCRIPT, PYTHON: Debilmente Tipados.

    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje="Alex Rosero";
    var_dump($mensaje);

});

Route::get("arreglos" , function(){
	//Arreglo: Estructura de datos.
	$estudiantes = [  "AN" => "Ana" ,
					  "MA" => "Maria" ,
					  "JO" => "Jorge"
				   ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";

	//print_r($estudiantes);


});

route:: get('paises' , function () {

$paises = [
	"COLOMBIA" =>[

     "Capital" => "Bogota",
     "Moneda" => "Peso",
     "Poblacion" => 50.34,


	],

	"PERU" =>[

     "Capital" => "Lima",
     "Moneda" => "Sol",
     "Poblacion" => 32.80,


	],


	"PARAGUAY" => [


     "Capital" => "Asuncion",
     "Moneda" => "Guaraní paraguayo",
     "Poblacion" =>7.359,

	]


];

//Invocar la vista
return view("paises")->with("naciones" ,$paises);


});

Route::get('formulario_buscador' , "MetabuscadorController@formulario_buscador");

Route::post('buscar' , "MetabuscadorController@buscar");


Route::resource('clientes', 'ClienteController')->middleware('miautenticacion');
Route::get('clientes/{cliente}/habilitar', "ClienteController@habilitar")
            ->name('clientes.habilitar')
            ->middleware('miautenticacion');


Route::resource('empleados', EmpleadoController::class);

Route::get('plantilla' , function(){
    return view('plantillas.template');
});


/*  Rutas de seguridad y autentitación*/

Route::resource ('usuarios', 'UserController');

/* Rutas de autenticación*/

Route::get('login' , 'Auth\LoginController@form')->name('login.form');
Route::post('login' , 'Auth\LoginController@login')->name('login.verify');

/* Ruta Cerrar Sesión */

Route::get('logout' , 'Auth\LoginController@logout')->name('logout');

/* Rutas de reset password*/
 Route::get('confirmar-correo' , 'Auth\ResetPasswordController@emailform');
 Route::post('enviar-link' , 'Auth\ResetPasswordController@submitlink')
 ->name("send.link");


Route::get('reset-password/{token}' ,
          'Auth\ResetPasswordController@resetform');

Route::post('reset-password' ,
          'Auth\ResetPasswordController@resetpassword'
          )->name('reset.password');

//Ruta pdf

Route::get('pdf', 'PDFController@pdf');

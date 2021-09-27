<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    //accion para mostrar el formulario del login
    public function form()
    {
        //
        return view('auth.login');

    }


    //verificar si el usuario esta registrado en bd
    public function login(Request $request)
    {

        //
        //var_dump($request->all());

        //Attempt: Consulta en BD si existe el usuario con email y password ingresados
        //       : En la tabla configurada en el modelo User
        //       : Encripta (hash) el password ingresado desde el form


      if( Auth::attempt([
        'email' => $request->input('email'),
        'password' => $request->input('password')

      ])){

        //var_dump($iniciosesion);

        //Usuario autenticado
        /*
        echo"<prev>";
        var_dump(Auth::user()->name);
        echo"<prev>";
        */

        return redirect()->route('clientes.index');



      }else{
          //usuaario no autenticado
          return redirect() ->route('login.form')
          ->with('mensaje' , "Usuario No reconocido");
      }



     }



    //accion para cerrar sesion
    public function logout()
    {

        //Logout: Elimina estado de sesión de usuario autenticado
        Auth::logout();
        //Redirigir a login
        return redirect()->route('login.form');


    }

}
